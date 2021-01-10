<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListDataSetTaskResponseBody\data\pageTaskInfo;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListDataSetTaskResponseBody\data\pageTaskInfo\ruleNameInfoList\ruleNameInfo;
use AlibabaCloud\Tea\Model;

class ruleNameInfoList extends Model
{
    /**
     * @var ruleNameInfo[]
     */
    public $ruleNameInfo;
    protected $_name = [
        'ruleNameInfo' => 'RuleNameInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleNameInfo) {
            $res['RuleNameInfo'] = [];
            if (null !== $this->ruleNameInfo && \is_array($this->ruleNameInfo)) {
                $n = 0;
                foreach ($this->ruleNameInfo as $item) {
                    $res['RuleNameInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleNameInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleNameInfo'])) {
            if (!empty($map['RuleNameInfo'])) {
                $model->ruleNameInfo = [];
                $n                   = 0;
                foreach ($map['RuleNameInfo'] as $item) {
                    $model->ruleNameInfo[$n++] = null !== $item ? ruleNameInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
