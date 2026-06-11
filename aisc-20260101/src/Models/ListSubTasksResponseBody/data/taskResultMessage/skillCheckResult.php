<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksResponseBody\data\taskResultMessage;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksResponseBody\data\taskResultMessage\skillCheckResult\riskInfo;

class skillCheckResult extends Model
{
    /**
     * @var riskInfo[]
     */
    public $riskInfo;
    protected $_name = [
        'riskInfo' => 'RiskInfo',
    ];

    public function validate()
    {
        if (\is_array($this->riskInfo)) {
            Model::validateArray($this->riskInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->riskInfo) {
            if (\is_array($this->riskInfo)) {
                $res['RiskInfo'] = [];
                $n1 = 0;
                foreach ($this->riskInfo as $item1) {
                    $res['RiskInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['RiskInfo'])) {
            if (!empty($map['RiskInfo'])) {
                $model->riskInfo = [];
                $n1 = 0;
                foreach ($map['RiskInfo'] as $item1) {
                    $model->riskInfo[$n1] = riskInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
