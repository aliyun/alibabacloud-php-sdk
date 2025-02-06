<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo\rules\ruleHitInfo\hit\conditionHitInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo\rules\ruleHitInfo\hit\conditionHitInfo\hitKeyWords\hitKeyWord;

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
        if (\is_array($this->hitKeyWord)) {
            Model::validateArray($this->hitKeyWord);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hitKeyWord) {
            if (\is_array($this->hitKeyWord)) {
                $res['HitKeyWord'] = [];
                $n1                = 0;
                foreach ($this->hitKeyWord as $item1) {
                    $res['HitKeyWord'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['HitKeyWord'])) {
            if (!empty($map['HitKeyWord'])) {
                $model->hitKeyWord = [];
                $n1                = 0;
                foreach ($map['HitKeyWord'] as $item1) {
                    $model->hitKeyWord[$n1++] = hitKeyWord::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
