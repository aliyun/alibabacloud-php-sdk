<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponseBody;

use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponseBody\data\components;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The review status of the message template. Valid values:
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
     * @description The category of the template when the returned value of TemplateType is WHATSAPP. Valid values:
     *
     *   **UTILITY**: a transactional template
     *   **MARKETING**: a marketing template
     *   **AUTHENTICATION**: an identity authentication template
     *
     * The category of the template when the returned value of the TemplateType parameter is VIBER. Valid values:
     *
     *   **text**: a template that contains only text
     *   **image**: a template that contains only images
     *   **text_image_button**: a template that contains text, images, and buttons
     *   **text_button**: a template that contains text and buttons
     *   **document**: a template that contains only files
     *   **video**: a template that contains only videos
     *   **text_video**: a template that contains text and videos
     *   **text_video_button**: a template that contains text, videos, and buttons
     *   **text_image**: a template that contains text and images
     *
     * > If Category is set to text_video_button, users cannot open a web page by clicking the button. Users can open only the video in the message. In this case, you do not need to specify the Url parameter for the URL button in the template.
     * @example TRANSACTIONAL
     *
     * @var string
     */
    public $category;

    /**
     * @description The components of the message template.
     *
     * @var components[]
     */
    public $components;

    /**
     * @description The examples of variables.
     *
     * @var string[]
     */
    public $example;

    /**
     * @description The language that is used in the message template. For more information, see [Language codes](~~463420~~).
     *
     * @example en_US
     *
     * @var string
     */
    public $language;

    /**
     * @description Whatsapp中Authentication类型模板发送消息时的消息有效期
     *
     * @example 120
     *
     * @var int
     */
    public $messageSendTtlSeconds;

    /**
     * @description The name of the message template.
     *
     * @example hello_whatsapp
     *
     * @var string
     */
    public $name;

    /**
     * @description 模板质量
     *
     * @example GREEN
     *
     * @var string
     */
    public $qualityScore;

    /**
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
     * @description The type of the message template. Valid values:
     *
     *   **WHATSAPP**
     *   **VIBER**
     *   LINE (developing)
     *
     * @example WHATSAPP
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'auditStatus'           => 'AuditStatus',
        'category'              => 'Category',
        'components'            => 'Components',
        'example'               => 'Example',
        'language'              => 'Language',
        'messageSendTtlSeconds' => 'MessageSendTtlSeconds',
        'name'                  => 'Name',
        'qualityScore'          => 'QualityScore',
        'reason'                => 'Reason',
        'templateCode'          => 'TemplateCode',
        'templateType'          => 'TemplateType',
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
        if (null !== $this->components) {
            $res['Components'] = [];
            if (null !== $this->components && \is_array($this->components)) {
                $n = 0;
                foreach ($this->components as $item) {
                    $res['Components'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->example) {
            $res['Example'] = $this->example;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->messageSendTtlSeconds) {
            $res['MessageSendTtlSeconds'] = $this->messageSendTtlSeconds;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->qualityScore) {
            $res['QualityScore'] = $this->qualityScore;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['Components'])) {
            if (!empty($map['Components'])) {
                $model->components = [];
                $n                 = 0;
                foreach ($map['Components'] as $item) {
                    $model->components[$n++] = null !== $item ? components::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Example'])) {
            $model->example = $map['Example'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['MessageSendTtlSeconds'])) {
            $model->messageSendTtlSeconds = $map['MessageSendTtlSeconds'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['QualityScore'])) {
            $model->qualityScore = $map['QualityScore'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
