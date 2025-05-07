<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\UploadDataSyncResponseBody\data\resultInfo\rules\ruleHitInfo;

class rules extends Model
{
    /**
     * @var ruleHitInfo[]
     */
    public $ruleHitInfo;
    protected $_name = [
        'ruleHitInfo' => 'RuleHitInfo',
    ];

    public function validate()
    {
        if (\is_array($this->ruleHitInfo)) {
            Model::validateArray($this->ruleHitInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ruleHitInfo) {
            if (\is_array($this->ruleHitInfo)) {
                $res['RuleHitInfo'] = [];
                $n1 = 0;
                foreach ($this->ruleHitInfo as $item1) {
                    $res['RuleHitInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RuleHitInfo'])) {
            if (!empty($map['RuleHitInfo'])) {
                $model->ruleHitInfo = [];
                $n1 = 0;
                foreach ($map['RuleHitInfo'] as $item1) {
                    $model->ruleHitInfo[$n1++] = ruleHitInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
