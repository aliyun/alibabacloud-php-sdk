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
     * @description The category of the template when the return value of the TemplateType parameter is WHATSAPP. Valid values:
     *
     *   **TRANSACTIONAL**: a transactional template
     *   **MARKETING**: a marketing template
     *   **OTP**: a one-time password template
     *
     * The category of the template when the return value of the TemplateType parameter is VIBER. Valid values:
     *
     *   **text**: a text message template
     *   **image**: an image message template
     *   **text_image_button**: a template that contains multiple media objects, including text, image, and button
     *   **text_button**: a template that contains the text and button media objects
     *   **document**: a template that contains a document attachment
     *   **video**: a video message template
     *   **text_video**: a template that contains the text and video media objects
     *   **text_video_button**: a template that contains multiple media objects, including text, video, and button
     *   **text_image**: a template that contains the text and image media objects
     *
     * > When the category of a Viber message template is text_video_button, users cannot open a web page by clicking the button. Users can open only the video in the message. In this case, you do not need to specify the Url parameter for the URL button in the template.
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
     * @description The name of the message template.
     *
     * @example hello_whatsapp
     *
     * @var string
     */
    public $name;

    /**
     * @description The code of the message template.
     *
     * @example 744c4b5c79c9432497a075bdfca3****
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description The type of the message template.
     *
     *   **WHATSAPP**
     *   **VIBER**
     *   LINE: the LINE message template. This type of message template will be released later.
     *
     * @example WHATSAPP
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'auditStatus'  => 'AuditStatus',
        'category'     => 'Category',
        'components'   => 'Components',
        'example'      => 'Example',
        'language'     => 'Language',
        'name'         => 'Name',
        'templateCode' => 'TemplateCode',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
