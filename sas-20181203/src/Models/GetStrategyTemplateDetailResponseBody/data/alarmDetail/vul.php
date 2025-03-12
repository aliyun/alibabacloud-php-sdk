<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetStrategyTemplateDetailResponseBody\data\alarmDetail;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetStrategyTemplateDetailResponseBody\data\alarmDetail\vul\item;
use AlibabaCloud\Tea\Model;

class vul extends Model
{
    /**
     * @description The items on which vulnerabilities are detected.
     *
     * @var item[]
     */
    public $item;

    /**
     * @description The severities of the vulnerabilities.
     *
     * @var string[]
     */
    public $riskLevel;
    protected $_name = [
        'item'      => 'Item',
        'riskLevel' => 'RiskLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->item) {
            $res['Item'] = [];
            if (null !== $this->item && \is_array($this->item)) {
                $n = 0;
                foreach ($this->item as $item) {
                    $res['Item'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vul
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Item'])) {
            if (!empty($map['Item'])) {
                $model->item = [];
                $n           = 0;
                foreach ($map['Item'] as $item) {
                    $model->item[$n++] = null !== $item ? item::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RiskLevel'])) {
            if (!empty($map['RiskLevel'])) {
                $model->riskLevel = $map['RiskLevel'];
            }
        }

        return $model;
    }
}
