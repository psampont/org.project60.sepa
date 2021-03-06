<?php
/*-------------------------------------------------------+
| Project 60 - SEPA direct debit                         |
| Copyright (C) 2013-2018 TTTP                           |
| Author: X+                                             |
+--------------------------------------------------------+
| This program is released as free software under the    |
| Affero GPL license. You can redistribute it and/or     |
| modify it under the terms of this license which you    |
| can read by viewing the included agpl.txt or online    |
| at www.gnu.org/licenses/agpl.html. Removal of this     |
| copyright header is strictly prohibited without        |
| written permission from the original author(s).        |
+--------------------------------------------------------*/


/**
 * hack to circumvent DAO detection
 * @todo    FIX/REMOVE
 *
 * @package CiviCRM_SEPA
 * @author  X+
 *
 */

$dao = array ();
$dao['AddressFormat'] = 'CRM_Core_DAO_AddressFormat';
$dao['Extension'] = 'CRM_Core_DAO_Extension';
$dao['File'] = 'CRM_Core_DAO_File';
$dao['LocationType'] = 'CRM_Core_DAO_LocationType';
$dao['MailSettings'] = 'CRM_Core_DAO_MailSettings';
$dao['Managed'] = 'CRM_Core_DAO_Managed';
$dao['Mapping'] = 'CRM_Core_DAO_Mapping';
$dao['OptionGroup'] = 'CRM_Core_DAO_OptionGroup';
$dao['PreferencesDate'] = 'CRM_Core_DAO_PreferencesDate';
$dao['Worldregion'] = 'CRM_Core_DAO_Worldregion';
$dao['Component'] = 'CRM_Core_DAO_Component';
$dao['Persistent'] = 'CRM_Core_DAO_Persistent';
$dao['PrevNextCache'] = 'CRM_Core_DAO_PrevNextCache';
$dao['ActionMapping'] = 'CRM_Core_DAO_ActionMapping';
$dao['ACL'] = 'CRM_ACL_DAO_ACL';
$dao['EntityRole'] = 'CRM_ACL_DAO_EntityRole';
$dao['Contact'] = 'CRM_Contact_DAO_Contact';
$dao['ACLContactCache'] = 'CRM_Contact_DAO_ACLContactCache';
$dao['RelationshipType'] = 'CRM_Contact_DAO_RelationshipType';
$dao['SavedSearch'] = 'CRM_Contact_DAO_SavedSearch';
$dao['ContactType'] = 'CRM_Contact_DAO_ContactType';
$dao['Batch'] = 'CRM_Batch_DAO_Batch';
$dao['EntityBatch'] = 'CRM_Batch_DAO_EntityBatch';
//NAMESPACE ERROR: Component already used . CRM_Mailing_DAO_Component ignored.
$dao['BounceType'] = 'CRM_Mailing_DAO_BounceType';
$dao['BouncePattern'] = 'CRM_Mailing_DAO_BouncePattern';
$dao['Premium'] = 'CRM_Contribute_DAO_Premium';
$dao['Currency'] = 'CRM_Financial_DAO_Currency';
$dao['FinancialAccount'] = 'CRM_Financial_DAO_FinancialAccount';
$dao['PaymentProcessorType'] = 'CRM_Financial_DAO_PaymentProcessorType';
$dao['FinancialType'] = 'CRM_Financial_DAO_FinancialType';
$dao['EntityFinancialAccount'] = 'CRM_Financial_DAO_EntityFinancialAccount';
$dao['FinancialItem'] = 'CRM_Financial_DAO_FinancialItem';
$dao['Provider'] = 'CRM_SMS_DAO_Provider';
$dao['Project'] = 'CRM_Project_DAO_Project';
$dao['Task'] = 'CRM_Project_DAO_Task';
$dao['TaskStatus'] = 'CRM_Project_DAO_TaskStatus';
$dao['MembershipStatus'] = 'CRM_Member_DAO_MembershipStatus';
$dao['Campaign'] = 'CRM_Campaign_DAO_Campaign';
$dao['CampaignGroup'] = 'CRM_Campaign_DAO_CampaignGroup';
$dao['Survey'] = 'CRM_Campaign_DAO_Survey';
$dao['ParticipantStatusType'] = 'CRM_Event_DAO_ParticipantStatusType';
$dao['Cart'] = 'CRM_Event_Cart_DAO_Cart';
$dao['RuleGroup'] = 'CRM_Dedupe_DAO_RuleGroup';
$dao['Rule'] = 'CRM_Dedupe_DAO_Rule';
$dao['Exception'] = 'CRM_Dedupe_DAO_Exception';
$dao['Case'] = 'CRM_Case_DAO_Case';
$dao['CaseContact'] = 'CRM_Case_DAO_CaseContact';
$dao['Grant'] = 'CRM_Grant_DAO_Grant';
$dao['Friend'] = 'CRM_Friend_DAO_Friend';
$dao['PledgeBlock'] = 'CRM_Pledge_DAO_PledgeBlock';
$dao['QueueItem'] = 'CRM_Queue_DAO_QueueItem';
$dao['PCP'] = 'CRM_PCP_DAO_PCP';
$dao['Cache'] = 'CRM_Core_DAO_Cache';
$dao['Country'] = 'CRM_Core_DAO_Country';
$dao['CustomGroup'] = 'CRM_Core_DAO_CustomGroup';
$dao['CustomField'] = 'CRM_Core_DAO_CustomField';
$dao['Domain'] = 'CRM_Core_DAO_Domain';
$dao['Email'] = 'CRM_Core_DAO_Email';
$dao['EntityFile'] = 'CRM_Core_DAO_EntityFile';
$dao['IM'] = 'CRM_Core_DAO_IM';
$dao['Job'] = 'CRM_Core_DAO_Job';
$dao['JobLog'] = 'CRM_Core_DAO_JobLog';
$dao['Log'] = 'CRM_Core_DAO_Log';
$dao['MappingField'] = 'CRM_Core_DAO_MappingField';
$dao['Menu'] = 'CRM_Core_DAO_Menu';
$dao['Navigation'] = 'CRM_Core_DAO_Navigation';
$dao['Note'] = 'CRM_Core_DAO_Note';
$dao['OptionValue'] = 'CRM_Core_DAO_OptionValue';
$dao['Phone'] = 'CRM_Core_DAO_Phone';
$dao['StateProvince'] = 'CRM_Core_DAO_StateProvince';
$dao['Tag'] = 'CRM_Core_DAO_Tag';
$dao['UFMatch'] = 'CRM_Core_DAO_UFMatch';
$dao['Timezone'] = 'CRM_Core_DAO_Timezone';
$dao['OpenID'] = 'CRM_Core_DAO_OpenID';
$dao['Website'] = 'CRM_Core_DAO_Website';
$dao['Setting'] = 'CRM_Core_DAO_Setting';
//NAMESPACE ERROR: Cache already used . CRM_ACL_DAO_Cache ignored.
$dao['Group'] = 'CRM_Contact_DAO_Group';
$dao['SubscriptionHistory'] = 'CRM_Contact_DAO_SubscriptionHistory';
$dao['GroupContactCache'] = 'CRM_Contact_DAO_GroupContactCache';
$dao['GroupNesting'] = 'CRM_Contact_DAO_GroupNesting';
$dao['GroupOrganization'] = 'CRM_Contact_DAO_GroupOrganization';
$dao['Relationship'] = 'CRM_Contact_DAO_Relationship';
$dao['Subscribe'] = 'CRM_Mailing_Event_DAO_Subscribe';
$dao['Confirm'] = 'CRM_Mailing_Event_DAO_Confirm';
$dao['ContributionPage'] = 'CRM_Contribute_DAO_ContributionPage';
$dao['Product'] = 'CRM_Contribute_DAO_Product';
$dao['PremiumsProduct'] = 'CRM_Contribute_DAO_PremiumsProduct';
$dao['Widget'] = 'CRM_Contribute_DAO_Widget';
$dao['PaymentProcessor'] = 'CRM_Financial_DAO_PaymentProcessor';
$dao['MembershipType'] = 'CRM_Member_DAO_MembershipType';
$dao['MembershipBlock'] = 'CRM_Member_DAO_MembershipBlock';
$dao['Activity'] = 'CRM_Activity_DAO_Activity';
$dao['ActivityAssignment'] = 'CRM_Activity_DAO_ActivityAssignment';
$dao['ActivityTarget'] = 'CRM_Activity_DAO_ActivityTarget';
$dao['CaseActivity'] = 'CRM_Case_DAO_CaseActivity';
$dao['Pledge'] = 'CRM_Pledge_DAO_Pledge';
$dao['Instance'] = 'CRM_Report_DAO_Instance';
$dao['Set'] = 'CRM_Price_DAO_Set';
$dao['SetEntity'] = 'CRM_Price_DAO_SetEntity';
$dao['County'] = 'CRM_Core_DAO_County';
$dao['Dashboard'] = 'CRM_Core_DAO_Dashboard';
$dao['Discount'] = 'CRM_Core_DAO_Discount';
$dao['EntityTag'] = 'CRM_Core_DAO_EntityTag';
$dao['MessageTemplates'] = 'CRM_Core_DAO_MessageTemplates';
$dao['UFGroup'] = 'CRM_Core_DAO_UFGroup';
$dao['UFField'] = 'CRM_Core_DAO_UFField';
$dao['UFJoin'] = 'CRM_Core_DAO_UFJoin';
$dao['ActionSchedule'] = 'CRM_Core_DAO_ActionSchedule';
$dao['ActionLog'] = 'CRM_Core_DAO_ActionLog';
$dao['DashboardContact'] = 'CRM_Contact_DAO_DashboardContact';
$dao['Mailing'] = 'CRM_Mailing_DAO_Mailing';
//NAMESPACE ERROR: Group already used . CRM_Mailing_DAO_Group ignored.
$dao['TrackableURL'] = 'CRM_Mailing_DAO_TrackableURL';
//NAMESPACE ERROR: Job already used . CRM_Mailing_DAO_Job ignored.
$dao['Recipients'] = 'CRM_Mailing_DAO_Recipients';
$dao['Spool'] = 'CRM_Mailing_DAO_Spool';
$dao['Queue'] = 'CRM_Mailing_Event_DAO_Queue';
$dao['Bounce'] = 'CRM_Mailing_Event_DAO_Bounce';
$dao['Delivered'] = 'CRM_Mailing_Event_DAO_Delivered';
$dao['Forward'] = 'CRM_Mailing_Event_DAO_Forward';
$dao['Opened'] = 'CRM_Mailing_Event_DAO_Opened';
$dao['Reply'] = 'CRM_Mailing_Event_DAO_Reply';
$dao['TrackableURLOpen'] = 'CRM_Mailing_Event_DAO_TrackableURLOpen';
$dao['Unsubscribe'] = 'CRM_Mailing_Event_DAO_Unsubscribe';
$dao['ContributionRecur'] = 'CRM_Contribute_DAO_ContributionRecur';
$dao['FinancialTrxn'] = 'CRM_Financial_DAO_FinancialTrxn';
$dao['OfficialReceipt'] = 'CRM_Financial_DAO_OfficialReceipt';
$dao['Membership'] = 'CRM_Member_DAO_Membership';
$dao['MembershipLog'] = 'CRM_Member_DAO_MembershipLog';
$dao['Field'] = 'CRM_Price_DAO_Field';
$dao['FieldValue'] = 'CRM_Price_DAO_FieldValue';
$dao['LineItem'] = 'CRM_Price_DAO_LineItem';
$dao['PCPBlock'] = 'CRM_PCP_DAO_PCPBlock';
$dao['Address'] = 'CRM_Core_DAO_Address';
$dao['LocBlock'] = 'CRM_Core_DAO_LocBlock';
$dao['GroupContact'] = 'CRM_Contact_DAO_GroupContact';
$dao['Contribution'] = 'CRM_Contribute_DAO_Contribution';
$dao['ContributionProduct'] = 'CRM_Contribute_DAO_ContributionProduct';
$dao['ContributionSoft'] = 'CRM_Contribute_DAO_ContributionSoft';
$dao['EntityFinancialTrxn'] = 'CRM_Financial_DAO_EntityFinancialTrxn';
$dao['MembershipPayment'] = 'CRM_Member_DAO_MembershipPayment';
$dao['Event'] = 'CRM_Event_DAO_Event';
$dao['Participant'] = 'CRM_Event_DAO_Participant';
$dao['ParticipantPayment'] = 'CRM_Event_DAO_ParticipantPayment';
$dao['EventInCart'] = 'CRM_Event_Cart_DAO_EventInCart';
$dao['PledgePayment'] = 'CRM_Pledge_DAO_PledgePayment';

$dao['SepaMandate'] = 'CRM_Sepa_DAO_SEPAMandate';
$dao['SepaCreditor'] = 'CRM_Sepa_DAO_SEPACreditor';
$dao['SepaSddFile'] = 'CRM_Sepa_DAO_SEPASddFile';
$dao['SepaTransactionGroup'] = 'CRM_Sepa_DAO_SEPATransactionGroup';
$dao['SepaContributionGroup'] = 'CRM_Sepa_DAO_SEPAContributionGroup';

$dao['BankAccount'] = 'CRM_Banking_DAO_BankAccount';
$dao['BankTransaction'] = 'CRM_Banking_DAO_BankTransaction';
$dao['PluginInstance'] = 'CRM_Banking_DAO_PluginInstance';
