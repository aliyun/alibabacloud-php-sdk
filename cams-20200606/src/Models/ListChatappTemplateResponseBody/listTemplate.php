<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListChatappTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class listTemplate extends Model
{
    /**
     * @description The review state of the message template. Valid values:
     *
     *   **pass**: The message template is approved.
     *   **fail**: The message template is rejected.
     *   **auditing**: The message template is being reviewed.
     *   **unaudit**: The review is suspended.
     *
     * @example pass
     *
     * @var string
     */
    public $auditStatus;

    /**
     * @description The category of the WhatsApp template. Valid values:
     *
     *   **UTILITY**: utility template
     *   **MARKETING**: marketing template
     *   **AUTHENTICATION**: authentication template
     *
     * The category of the Viber template. Valid values:
     *
     *   **text**: template that contains only text
     *   **image**: template that contains only an image
     *   **text_image_button**: template that contains text, an image, and a button
     *   **text_button**: template that contains text and a button
     *   **document**: template that contains only a document
     *   **video**: template that contains only a video
     *   **text_video**: template that contains text and a video
     *   **text_video_button**: template that contains text, a video, and a button
     *   **text_image**: template that contains text and an image
     *
     * @example TRANSACTIONAL
     *
     * @var string
     */
    public $category;

    /**
     * @description The language that is used in the message template. For more information, see [Language codes](https://help.aliyun.com/document_detail/463420.html).
     *
     * @example en
     *
     * @var string
     */
    public $language;

    /**
     * @description The reason for the review failure.
     *
     * @example None
     *
     * @var string
     */
    public $reason;

    /**
     * @description The code of the message template.
     *
     * @example 744c4b5c79c9432497a075bdfca3****
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description The name of the message template.
     *
     * @example hello_whatsapp
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The type of the template. Valid values: WHATSAPP and VIBER.
     *
     * @example WHATSAPP
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'auditStatus'  => 'AuditStatus',
        'category'     => 'Category',
        'language'     => 'Language',
        'reason'       => 'Reason',
        'templateCode' => 'TemplateCode',
        'templateName' => 'TemplateName',
        'templateType' => 'TemplateType',
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
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
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
     * @return listTemplate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
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
