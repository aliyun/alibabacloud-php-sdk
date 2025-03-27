<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest\inputAttachments\audioSelectors;

class inputAttachments extends Model
{
    /**
     * @var audioSelectors[]
     */
    public $audioSelectors;

    /**
     * @var string
     */
    public $inputId;

    /**
     * @var string
     */
    public $languageName;
    protected $_name = [
        'audioSelectors' => 'AudioSelectors',
        'inputId' => 'InputId',
        'languageName' => 'LanguageName',
    ];

    public function validate()
    {
        if (\is_array($this->audioSelectors)) {
            Model::validateArray($this->audioSelectors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioSelectors) {
            if (\is_array($this->audioSelectors)) {
                $res['AudioSelectors'] = [];
                $n1 = 0;
                foreach ($this->audioSelectors as $item1) {
                    $res['AudioSelectors'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioSelectors'])) {
            if (!empty($map['AudioSelectors'])) {
                $model->audioSelectors = [];
                $n1 = 0;
                foreach ($map['AudioSelectors'] as $item1) {
                    $model->audioSelectors[$n1++] = audioSelectors::fromMap($item1);
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
