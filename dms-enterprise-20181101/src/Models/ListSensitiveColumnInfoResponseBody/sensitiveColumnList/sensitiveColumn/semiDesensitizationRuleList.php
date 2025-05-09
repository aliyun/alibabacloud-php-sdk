<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnInfoResponseBody\sensitiveColumnList\sensitiveColumn;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnInfoResponseBody\sensitiveColumnList\sensitiveColumn\semiDesensitizationRuleList\semiDesensitizationRule;

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
        if (\is_array($this->semiDesensitizationRule)) {
            Model::validateArray($this->semiDesensitizationRule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->semiDesensitizationRule) {
            if (\is_array($this->semiDesensitizationRule)) {
                $res['SemiDesensitizationRule'] = [];
                $n1 = 0;
                foreach ($this->semiDesensitizationRule as $item1) {
                    $res['SemiDesensitizationRule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SemiDesensitizationRule'])) {
            if (!empty($map['SemiDesensitizationRule'])) {
                $model->semiDesensitizationRule = [];
                $n1 = 0;
                foreach ($map['SemiDesensitizationRule'] as $item1) {
                    $model->semiDesensitizationRule[$n1++] = semiDesensitizationRule::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
