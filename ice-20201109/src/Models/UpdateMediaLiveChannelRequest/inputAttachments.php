<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest;

use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest\inputAttachments\audioSelectors;
use AlibabaCloud\Tea\Model;

class inputAttachments extends Model
{
    /**
     * @description The audio selectors.
     *
     * @var audioSelectors[]
     */
    public $audioSelectors;

    /**
     * @description The ID of the associated input.
     *
     * This parameter is required.
     *
     * @example myinput
     *
     * @var string
     */
    public $inputId;

    /**
     * @description The tag that identifies the language of the RTMP input. It can be referenced by the output. The maximum length is 32 characters. Supported characters:
     *
     *   Unicode letters
     *   Digits (0-9)
     *   Underscore (_)
     *   Hyphen (-)
     *   Space (a space cannot be at the beginning or end)
     *
     * @example English
     *
     * @var string
     */
    public $languageName;
    protected $_name = [
        'audioSelectors' => 'AudioSelectors',
        'inputId' => 'InputId',
        'languageName' => 'LanguageName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioSelectors) {
            $res['AudioSelectors'] = [];
            if (null !== $this->audioSelectors && \is_array($this->audioSelectors)) {
                $n = 0;
                foreach ($this->audioSelectors as $item) {
                    $res['AudioSelectors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->inputId) {
            $res['InputId'] = $this->inputId;
        }
        if (null !== $this->languageName) {
            $res['LanguageName'] = $this->languageName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputAttachments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioSelectors'])) {
            if (!empty($map['AudioSelectors'])) {
                $model->audioSelectors = [];
                $n = 0;
                foreach ($map['AudioSelectors'] as $item) {
                    $model->audioSelectors[$n++] = null !== $item ? audioSelectors::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InputId'])) {
            $model->inputId = $map['InputId'];
        }
        if (isset($map['LanguageName'])) {
            $model->languageName = $map['LanguageName'];
        }

        return $model;
    }
}
