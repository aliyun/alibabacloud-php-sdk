<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListChatappTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class listTemplate extends Model
{
    /**
     * @description The review state of the template. Valid values:
     *
     *   **pass**: The template is approved.
     *   **fail**: The template is rejected.
     *   **auditing**: The template is being reviewed.
     *   **unaudit**: The review is suspended.
     *
     * @example pass
     *
     * @var string
     */
    public $auditStatus;

    /**
     * @description The category of the WhatsApp message template. Valid values:
     *
     *   **UTILITY**
     *   **MARKETING**
     *   **AUTHENTICATION**
     *
     * The category of the Viber template. Valid values:
     *
     *   **text**: template that contains only text
     *   **image**: template that contains only images
     *   **text_image_button**: template that contains text, images, and buttons
     *   **text_button**: template that contains text and buttons
     *   **document**: template that contains only documents
     *   **video**: template that contains only videos
     *   **text_video**: template that contains text and videos
     *   **text_video_button**: template that contains text, videos, and buttons
     *   **text_image**: template that contains text and images
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
     * @description The time when the template was last modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1711006633000
     *
     * @var int
     */
    public $lastUpdateTime;

    /**
     * @description The reason why the template was rejected.
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
        'auditStatus' => 'AuditStatus',
        'category' => 'Category',
        'language' => 'Language',
        'lastUpdateTime' => 'LastUpdateTime',
        'reason' => 'Reason',
        'templateCode' => 'TemplateCode',
        'templateName' => 'TemplateName',
        'templateType' => 'TemplateType',
    ];

    public function validate() {}

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
        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
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
        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
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
