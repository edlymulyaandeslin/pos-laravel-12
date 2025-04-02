import { LucideIcon } from 'lucide-react';

export interface Auth {
    user: User;
}

export interface BreadcrumbItem {
    title: string;
    href: string;
}

export interface NavGroup {
    title: string;
    items: NavItem[];
}

export interface NavItem {
    title: string;
    url: string;
    icon?: LucideIcon | null;
    isActive?: boolean;
}

export interface SharedData {
    name: string;
    quote: { message: string; author: string };
    auth: Auth;
    [key: string]: unknown;
}

export interface User {
    id: number;
    name: string;
    email: string;
    email_verified_at: string | null;
    created_at: string;
    updated_at: string;
    [key: string]: unknown; // This allows for additional properties...
}

export interface Customer {
    id: number;
    name: string;
    phone: string;
    created_at: string;
    updated_at: string;
}

export interface Category {
    id: number;
    name: string;
    created_at: string;
    updated_at: string;
}

export interface Product {
    id: number;
    category_id: number;
    name: string;
    price: number;
    stock: number;
    created_at: string;
    updated_at: string;
}

export interface Transaction {
    id: number;
    user_id: number;
    customer_id: number;
    total_price: string;
    price: number;
    created_at: string;
    updated_at: string;
}
