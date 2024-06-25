<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QuerySmsTemplateResponseBody extends Model
{
    /**
     * @description The HTTP status code.
     *
     *   The value OK indicates that the request was successful.
     *   Other values indicate that the request failed. For more information, see [Error codes](https://help.aliyun.com/document_detail/101346.html).
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The time when the message template was created.
     *
     * @example 2019-06-04 11:42:17
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The returned message.
     *
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @description The approval remarks.
     *
     *   If the value of AuditStatus is **AUDIT_STATE_PASS** or **AUDIT_STATE_INIT**, the value of Reason is No Approval Remarks.
     *   If the value of AuditStatus is **AUDIT_STATE_NOT_PASS**, the reason why the message template is rejected is returned.
     *
     * @example The document cannot verify the authenticity of the information. Please upload it again.
     *
     * @var string
     */
    public $reason;

    /**
     * @description The request ID.
     *
     * @example 0A974B78-02BF-4C79-ADF3-90CFBA1B55B1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The code of the message template.
     *
     * @example SMS_16703****
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description The content of the message template.
     *
     * @example You are applying for mobile registration. The verification code is: ${code}, valid for 5 minutes!
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
     * @description The approval status of the message template. Valid values:
     *
     *   **0**: The message template is pending approval.
     *   **1**: The message template is approved.
     *   **AUDIT_STATE_NOT_PASS**: The message template is rejected. You can view the reason in the Reason response parameter.
     *   **10**: The approval is canceled.
     *
     * @example 1
     *
     * @var int
     */
    public $templateStatus;

    /**
     * @description The type of the message. Valid values:
     *
     *   **0**: verification code
     *   **1**: notification message
     *   **2**: promotional message
     *   **3**: message sent to countries or regions outside the Chinese mainland
     *
     * @example 1
     *
     * @var int
     */
    public $templateType;
    protected $_name = [
        'code'            => 'Code',
        'createDate'      => 'CreateDate',
        'message'         => 'Message',
        'reason'          => 'Reason',
        'requestId'       => 'RequestId',
        'templateCode'    => 'TemplateCode',
        'templateContent' => 'TemplateContent',
        'templateName'    => 'TemplateName',
        'templateStatus'  => 'TemplateStatus',
        'templateType'    => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->templateStatus) {
            $res['TemplateStatus'] = $this->templateStatus;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySmsTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['TemplateStatus'])) {
            $model->templateStatus = $map['TemplateStatus'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
