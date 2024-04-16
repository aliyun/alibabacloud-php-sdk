<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnInfoResponseBody\sensitiveColumnList\sensitiveColumn;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnInfoResponseBody\sensitiveColumnList\sensitiveColumn\semiDesensitizationRuleList\semiDesensitizationRule;
use AlibabaCloud\Tea\Model;

class semiDesensitizationRuleList extends Model
{
    /**
     * @var semiDesensitizationRule[]
     */
    public $semiDesensitizationRule;
    protected $_name = [
        'semiDesensitizationRule' => 'SemiDesensitizationRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->semiDesensitizationRule) {
            $res['SemiDesensitizationRule'] = [];
            if (null !== $this->semiDesensitizationRule && \is_array($this->semiDesensitizationRule)) {
                $n = 0;
                foreach ($this->semiDesensitizationRule as $item) {
                    $res['SemiDesensitizationRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return semiDesensitizationRuleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SemiDesensitizationRule'])) {
            if (!empty($map['SemiDesensitizationRule'])) {
                $model->semiDesensitizationRule = [];
                $n                              = 0;
                foreach ($map['SemiDesensitizationRule'] as $item) {
                    $model->semiDesensitizationRule[$n++] = null !== $item ? semiDesensitizationRule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
