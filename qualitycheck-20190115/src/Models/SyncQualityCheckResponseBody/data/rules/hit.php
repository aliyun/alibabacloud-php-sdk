<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SyncQualityCheckResponseBody\data\rules;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SyncQualityCheckResponseBody\data\rules\hit\hitKeyWords;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SyncQualityCheckResponseBody\data\rules\hit\phrase;
use AlibabaCloud\Tea\Model;

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
        'phrase'      => 'Phrase',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hitKeyWords) {
            $res['HitKeyWords'] = [];
            if (null !== $this->hitKeyWords && \is_array($this->hitKeyWords)) {
                $n = 0;
                foreach ($this->hitKeyWords as $item) {
                    $res['HitKeyWords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->phrase) {
            $res['Phrase'] = null !== $this->phrase ? $this->phrase->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HitKeyWords'])) {
            if (!empty($map['HitKeyWords'])) {
                $model->hitKeyWords = [];
                $n                  = 0;
                foreach ($map['HitKeyWords'] as $item) {
                    $model->hitKeyWords[$n++] = null !== $item ? hitKeyWords::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Phrase'])) {
            $model->phrase = phrase::fromMap($map['Phrase']);
        }

        return $model;
    }
}
