<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo;
use AlibabaCloud\Tea\Model;

class operators extends Model
{
    /**
     * @var operatorBasicInfo[]
     */
    public $operatorBasicInfo;
    protected $_name = [
        'operatorBasicInfo' => 'OperatorBasicInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operatorBasicInfo) {
            $res['OperatorBasicInfo'] = [];
            if (null !== $this->operatorBasicInfo && \is_array($this->operatorBasicInfo)) {
                $n = 0;
                foreach ($this->operatorBasicInfo as $item) {
                    $res['OperatorBasicInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operators
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperatorBasicInfo'])) {
            if (!empty($map['OperatorBasicInfo'])) {
                $model->operatorBasicInfo = [];
                $n                        = 0;
                foreach ($map['OperatorBasicInfo'] as $item) {
                    $model->operatorBasicInfo[$n++] = null !== $item ? operatorBasicInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
