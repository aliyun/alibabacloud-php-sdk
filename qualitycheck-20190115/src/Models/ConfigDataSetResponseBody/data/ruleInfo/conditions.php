<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConfigDataSetResponseBody\data\ruleInfo;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConfigDataSetResponseBody\data\ruleInfo\conditions\conditionBasicInfo;
use AlibabaCloud\Tea\Model;

class conditions extends Model
{
    /**
     * @var conditionBasicInfo[]
     */
    public $conditionBasicInfo;
    protected $_name = [
        'conditionBasicInfo' => 'ConditionBasicInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionBasicInfo) {
            $res['ConditionBasicInfo'] = [];
            if (null !== $this->conditionBasicInfo && \is_array($this->conditionBasicInfo)) {
                $n = 0;
                foreach ($this->conditionBasicInfo as $item) {
                    $res['ConditionBasicInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionBasicInfo'])) {
            if (!empty($map['ConditionBasicInfo'])) {
                $model->conditionBasicInfo = [];
                $n                         = 0;
                foreach ($map['ConditionBasicInfo'] as $item) {
                    $model->conditionBasicInfo[$n++] = null !== $item ? conditionBasicInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
