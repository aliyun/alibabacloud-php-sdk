<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SyncQualityCheckResponseBody\data\rules;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SyncQualityCheckResponseBody\data\rules\hit\hitKeyWords;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SyncQualityCheckResponseBody\data\rules\hit\phrase;

class hit extends Model
{
    /**
     * @var hitKeyWords[]
     */
    public $hitKeyWords;

    /**
     * @var phrase
     */
    public $phrase;
    protected $_name = [
        'hitKeyWords' => 'HitKeyWords',
        'phrase' => 'Phrase',
    ];

    public function validate()
    {
        if (\is_array($this->hitKeyWords)) {
            Model::validateArray($this->hitKeyWords);
        }
        if (null !== $this->phrase) {
            $this->phrase->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hitKeyWords) {
            if (\is_array($this->hitKeyWords)) {
                $res['HitKeyWords'] = [];
                $n1 = 0;
                foreach ($this->hitKeyWords as $item1) {
                    $res['HitKeyWords'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->phrase) {
            $res['Phrase'] = null !== $this->phrase ? $this->phrase->toArray($noStream) : $this->phrase;
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
        if (isset($map['HitKeyWords'])) {
            if (!empty($map['HitKeyWords'])) {
                $model->hitKeyWords = [];
                $n1 = 0;
                foreach ($map['HitKeyWords'] as $item1) {
                    $model->hitKeyWords[$n1++] = hitKeyWords::fromMap($item1);
                }
            }
        }

        if (isset($map['Phrase'])) {
            $model->phrase = phrase::fromMap($map['Phrase']);
        }

        return $model;
    }
}
