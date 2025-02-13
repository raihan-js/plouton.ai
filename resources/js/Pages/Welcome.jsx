import { Head, Link } from "@inertiajs/react";
import { motion } from "framer-motion";
import { animateScroll as scroll, Link as ScrollLink } from "react-scroll";
import { CpuChipIcon, RocketLaunchIcon, ShieldCheckIcon, LightBulbIcon, ChatBubbleLeftRightIcon, CodeBracketIcon, ChevronDownIcon } from "@heroicons/react/24/solid";

export default function Welcome({ auth }) {
    return (
        <>
            <Head title="Welcome" />

            {/* Header */}
            <header className="fixed top-0 left-0 w-full bg-gray-900 text-white shadow-lg z-50">
                <div className="max-w-7xl mx-auto flex justify-between items-center py-4 px-6">
                    <h1 className="text-2xl font-bold cursor-pointer" onClick={() => scroll.scrollToTop()}>
                        AI Software Solutions
                    </h1>
                    <nav className="hidden md:flex space-x-6">
                        {["about", "services", "projects", "case-studies", "faq", "contact"].map((section) => (
                            <ScrollLink
                                key={section}
                                to={section}
                                smooth={true}
                                duration={600}
                                className="cursor-pointer hover:text-gray-400 transition"
                            >
                                {section.replace("-", " ").toUpperCase()}
                            </ScrollLink>
                        ))}
                    </nav>
                </div>
            </header>

            {/* Hero Section */}
            <section className="relative flex flex-col items-center justify-center h-screen bg-gray-900 text-white text-center">
                <motion.h1 initial={{ opacity: 0, y: -50 }} animate={{ opacity: 1, y: 0 }} transition={{ duration: 1 }} className="text-5xl font-bold">
                    AI Solutions that Power the Future
                </motion.h1>
                <p className="mt-4 text-lg text-gray-300 max-w-2xl">
                    Revolutionizing businesses with AI-driven automation, predictive analytics, and deep learning.
                </p>
                <div className="mt-6 flex space-x-4">
                    <ScrollLink to="contact" smooth={true} duration={600} className="bg-blue-600 px-6 py-3 rounded-lg text-lg font-semibold hover:bg-blue-700 cursor-pointer">
                        Get in Touch
                    </ScrollLink>
                    <ScrollLink to="services" smooth={true} duration={600} className="border border-gray-500 px-6 py-3 rounded-lg text-lg font-semibold text-gray-300 hover:border-gray-400 cursor-pointer">
                        Explore AI Services
                    </ScrollLink>
                </div>
                <ChevronDownIcon className="w-10 h-10 mt-10 animate-bounce text-gray-500" />
            </section>

            {/* About Section */}
            <section id="about" className="py-20 bg-gray-800 text-white text-center">
                <div className="max-w-6xl mx-auto">
                    <h2 className="text-4xl font-semibold">Who We Are</h2>
                    <p className="mt-4 text-gray-300">
                        We are an AI-focused software company dedicated to delivering **intelligent, scalable, and innovative** AI solutions to businesses worldwide.
                        From startups to enterprises, we integrate AI to **automate workflows, improve efficiency, and drive exponential growth**.
                    </p>
                </div>
            </section>

            {/* AI Services */}
            <section id="services" className="py-20 bg-gray-900 text-white text-center">
                <div className="max-w-6xl mx-auto">
                    <h2 className="text-4xl font-semibold">Our AI Services</h2>
                    <p className="mt-4 text-gray-300">We develop AI-driven solutions tailored to your business needs.</p>
                    <div className="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        {[
                            { title: "AI Chatbots & Assistants", desc: "Conversational AI for customer support, automation, and virtual assistants.", icon: ChatBubbleLeftRightIcon },
                            { title: "Machine Learning Models", desc: "Custom AI models for prediction, recommendation, and automation.", icon: CpuChipIcon },
                            { title: "AI-Driven Analytics", desc: "Real-time AI insights, business intelligence, and predictive analytics.", icon: LightBulbIcon },
                            { title: "AI-powered SaaS", desc: "Scalable AI-based SaaS platforms for global businesses.", icon: CodeBracketIcon },
                            { title: "AI Security & Compliance", desc: "Advanced AI-driven security solutions to detect fraud and anomalies.", icon: ShieldCheckIcon },
                            { title: "AI for Healthcare", desc: "AI-assisted diagnostics, patient management, and automated workflows.", icon: RocketLaunchIcon },
                        ].map((service, index) => (
                            <motion.div key={index} initial={{ opacity: 0, y: 50 }} whileInView={{ opacity: 1, y: 0 }} viewport={{ once: true }} transition={{ duration: 0.8, delay: index * 0.2 }} className="bg-gray-800 p-6 rounded-lg shadow-lg">
                                <service.icon className="w-12 h-12 mx-auto text-blue-500" />
                                <h3 className="mt-4 text-xl font-semibold">{service.title}</h3>
                                <p className="mt-2 text-gray-400">{service.desc}</p>
                            </motion.div>
                        ))}
                    </div>
                </div>
            </section>

            {/* AI Case Studies */}
            <section id="case-studies" className="py-20 bg-gray-900 text-white text-center">
                <h2 className="text-4xl font-semibold">AI Case Studies</h2>
                <p className="mt-4 text-gray-300">See how AI has transformed businesses across industries.</p>
            </section>

            {/* Featured Projects */}
            <section id="projects" className="py-20 bg-gray-800 text-white text-center">
                <h2 className="text-4xl font-semibold">Featured AI Projects</h2>
                <p className="mt-4 text-gray-300">Our cutting-edge AI solutions in action.</p>
            </section>

            {/* FAQ Section */}
            <section id="faq" className="py-20 bg-gray-900 text-white text-center">
                <h2 className="text-4xl font-semibold">Frequently Asked Questions</h2>
                <p className="mt-4 text-gray-300">Everything you need to know about our AI services.</p>
            </section>

            {/* Contact Section */}
            <section id="contact" className="py-20 bg-gray-800 text-white text-center">
                <h2 className="text-4xl font-semibold">Contact Us</h2>
                <p className="mt-4 text-gray-300">Let’s discuss how AI can revolutionize your business.</p>
                <Link href="/contact" className="mt-6 inline-block bg-green-600 px-6 py-3 rounded-lg text-lg font-semibold hover:bg-green-700">
                    Get Started
                </Link>
            </section>

            {/* Footer */}
            <footer className="py-6 bg-gray-900 text-center text-gray-400">
                &copy; 2025 AI Software Solutions. All rights reserved.
            </footer>
        </>
    );
}
