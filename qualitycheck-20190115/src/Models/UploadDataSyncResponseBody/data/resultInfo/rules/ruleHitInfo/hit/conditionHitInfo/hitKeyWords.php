<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo\rules\ruleHitInfo\hit\conditionHitInfo;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo\rules\ruleHitInfo\hit\conditionHitInfo\hitKeyWords\hitKeyWord;
use AlibabaCloud\Tea\Model;

class hitKeyWords extends Model
{
    /**
     * @var hitKeyWord[]
     */
    public $hitKeyWord;
    protected $_name = [
        'hitKeyWord' => 'HitKeyWord',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hitKeyWord) {
            $res['HitKeyWord'] = [];
            if (null !== $this->hitKeyWord && \is_array($this->hitKeyWord)) {
                $n = 0;
                foreach ($this->hitKeyWord as $item) {
                    $res['HitKeyWord'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hitKeyWords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HitKeyWord'])) {
            if (!empty($map['HitKeyWord'])) {
                $model->hitKeyWord = [];
                $n                 = 0;
                foreach ($map['HitKeyWord'] as $item) {
                    $model->hitKeyWord[$n++] = null !== $item ? hitKeyWord::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
