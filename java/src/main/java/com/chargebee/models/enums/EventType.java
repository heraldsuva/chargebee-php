package com.chargebee.models.enums;

public enum EventType {
    CUSTOMER_CREATED,
    CUSTOMER_CHANGED,
    SUBSCRIPTION_CREATED,
    SUBSCRIPTION_STARTED,
    SUBSCRIPTION_TRIAL_END_REMINDER,
    SUBSCRIPTION_ACTIVATED,
    SUBSCRIPTION_CHANGED,
    SUBSCRIPTION_CANCELLATION_SCHEDULED,
    SUBSCRIPTION_CANCELLATION_REMINDER,
    SUBSCRIPTION_CANCELLED,
    SUBSCRIPTION_REACTIVATED,
    SUBSCRIPTION_RENEWED,
    SUBSCRIPTION_SCHEDULED_CANCELLATION_REMOVED,
    SUBSCRIPTION_SHIPPING_ADDRESS_UPDATED,
    INVOICE_CREATED,
    INVOICE_GENERATED,
    INVOICE_UPDATED,
    INVOICE_DELETED,
    SUBSCRIPTION_RENEWAL_REMINDER,
    PAYMENT_SUCCEEDED,
    PAYMENT_FAILED,
    PAYMENT_REFUNDED,
    PAYMENT_INITIATED,
    REFUND_INITIATED,
    CARD_ADDED,
    CARD_UPDATED,
    CARD_EXPIRY_REMINDER,
    CARD_EXPIRED,
    CARD_DELETED,
    _UNKNOWN; /*Indicates unexpected value for this enum. You can get this when there is a
    java-client version incompatibility. We suggest you to upgrade to the latest version */
}