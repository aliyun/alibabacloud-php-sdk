<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsTemplateListResponseBody;

use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsTemplateListResponseBody\smsTemplateList\reason;
use AlibabaCloud\Tea\Model;

class smsTemplateList extends Model
{
    /**
     * @description The approval status of the message template. Valid values:
     *
     *   **AUDIT_STATE_INIT**: The message template is pending approval.
     *   **AUDIT_STATE_PASS**: The message template is approved.
     *   **AUDIT_STATE_NOT_PASS**: The message template is rejected. You can view the reason in the Reason response parameter.
     *   **AUDIT_STATE_CANCEL** or **AUDIT_SATE_CANCEL**: The approval is canceled.
     *
     * @example AUDIT_STATE_PASS
     *
     * @var string
     */
    public $auditStatus;

    /**
     * @description The time when the message template was created. The time is in the yyyy-MM-dd HH:mm:ss format.
     *
     * @example 2020-06-04 11:42:17
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The ticket ID.
     *
     * @example 2361****
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The type of the message template. We recommend that you specify this parameter. Valid values:
     *
     *   **0**: verification code
     *   **1**: notification message
     *   **2**: promotional message
     *   **3**: message sent to countries or regions outside the Chinese mainland
     *   **7**: digital message
     *
     * > The template type is the same as the value of the TemplateType parameter in the AddSmsTemplate and ModifySmsTemplate operations.
     * @example 0
     *
     * @var int
     */
    public $outerTemplateType;

    /**
     * @description The approval remarks.
     *
     *   If the value of AuditStatus is **AUDIT_STATE_PASS** or **AUDIT_STATE_INIT**, the value of Reason is No Approval Remarks.
     *   If the value of AuditStatus is **AUDIT_STATE_NOT_PASS**, the reason why the message template is rejected is returned.
     *
     * @var reason
     */
    public $reason;

    /**
     * @description The code of the message template.
     *
     * You can log on to the [Short Message Service (SMS) console](https://dysms.console.aliyun.com/dysms.htm), click **Go China** or **Go Globe** in the left-side navigation pane, and then view the template code on the **Templates** tab. You can also call the [AddSmsTemplate](https://help.aliyun.com/document_detail/121208.html) operation to obtain the template code.
     * @example SMS_1525***
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description The content of the message template.
     *
     * @example 123456789
     *
     * @var string
     */
    public $templateContent;

    /**
     * @description The name of the message template.
     *
     * @example aliyun verification code
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The type of the message template. Valid values:
     *
     *   **0**: notification message
     *   **1**: promotional message
     *   **2**: verification code
     *   **6**: message sent to countries or regions outside the Chinese mainland
     *   **7**: digital message
     *
     * @example 7
     *
     * @var int
     */
    public $templateType;
    protected $_name = [
        'auditStatus'       => 'AuditStatus',
        'createDate'        => 'CreateDate',
        'orderId'           => 'OrderId',
        'outerTemplateType' => 'OuterTemplateType',
        'reason'            => 'Reason',
        'templateCode'      => 'TemplateCode',
        'templateContent'   => 'TemplateContent',
        'templateName'      => 'TemplateName',
        'templateType'      => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->outerTemplateType) {
            $res['OuterTemplateType'] = $this->outerTemplateType;
        }
        if (null !== $this->reason) {
            $res['Reason'] = null !== $this->reason ? $this->reason->toMap() : null;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateContent) {
            $res['TemplateContent'] = $this->templateContent;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return smsTemplateList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['OuterTemplateType'])) {
            $model->outerTemplateType = $map['OuterTemplateType'];
        }
        if (isset($map['Reason'])) {
            $model->reason = reason::fromMap($map['Reason']);
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateContent'])) {
            $model->templateContent = $map['TemplateContent'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
