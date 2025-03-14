<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveChannelResponseBody\channel;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveChannelResponseBody\channel\inputAttachments\audioSelectors;
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
     * @example SEGK5KA6KYKAWQQH
     *
     * @var string
     */
    public $inputId;

    /**
     * @description The name of the input.
     *
     * @example myinput
     *
     * @var string
     */
    public $inputName;

    /**
     * @description The language name.
     *
     * @example eng
     *
     * @var string
     */
    public $languageName;
    protected $_name = [
        'audioSelectors' => 'AudioSelectors',
        'inputId' => 'InputId',
        'inputName' => 'InputName',
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
        if (null !== $this->inputName) {
            $res['InputName'] = $this->inputName;
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
        if (isset($map['InputName'])) {
            $model->inputName = $map['InputName'];
        }
        if (isset($map['LanguageName'])) {
            $model->languageName = $map['LanguageName'];
        }

        return $model;
    }
}
