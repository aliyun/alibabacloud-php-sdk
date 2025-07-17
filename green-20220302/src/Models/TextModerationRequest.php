<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models;

use AlibabaCloud\Tea\Model;

class TextModerationRequest extends Model
{
    /**
     * @description The type of the moderation service. Valid values: nickname_detection: user nickname chat_detection: chat interactions comment_detection: dynamic comments pgc_detection: professionally-generated content (PGC) teaching materials
     *
     * Valid values:
     *
     *   pgc_detection: moderation of PGC teaching materials
     *   nickname_detection: user nickname moderation
     *   comment_multilingual_pro: multi-language moderation in international business scenarios
     *   chat_detection: moderation of interactive content of private chats
     *   ad_compliance_detection: advertising law compliance identification
     *   comment_detection: moderation of comment content of public chats
     *   ai_art_detection: AI-generated text identfication
     *
     * @example nickname_detection
     *
     * @var string
     */
    public $service;

    /**
     * @description The parameters required by the moderation service. The value is a JSON string.
     *
     * @example {"content":"Content to be moderated"}
     *
     * @var string
     */
    public $serviceParameters;
    protected $_name = [
        'service' => 'Service',
        'serviceParameters' => 'ServiceParameters',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }
        if (null !== $this->serviceParameters) {
            $res['ServiceParameters'] = $this->serviceParameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TextModerationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }
        if (isset($map['ServiceParameters'])) {
            $model->serviceParameters = $map['ServiceParameters'];
        }

        return $model;
    }
}
