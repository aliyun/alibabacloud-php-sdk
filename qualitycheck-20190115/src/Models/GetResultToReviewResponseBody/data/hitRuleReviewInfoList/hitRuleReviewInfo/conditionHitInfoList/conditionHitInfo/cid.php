<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\hitRuleReviewInfoList\hitRuleReviewInfo\conditionHitInfoList\conditionHitInfo;

use AlibabaCloud\Dara\Model;

class cid extends Model
{
    /**
     * @var string[]
     */
    public $cid;
    protected $_name = [
        'cid' => 'Cid',
    ];

    public function validate()
    {
        if (\is_array($this->cid)) {
            Model::validateArray($this->cid);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cid) {
            if (\is_array($this->cid)) {
                $res['Cid'] = [];
                $n1 = 0;
                foreach ($this->cid as $item1) {
                    $res['Cid'][$n1++] = $item1;
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
        if (isset($map['Cid'])) {
            if (!empty($map['Cid'])) {
                $model->cid = [];
                $n1 = 0;
                foreach ($map['Cid'] as $item1) {
                    $model->cid[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
