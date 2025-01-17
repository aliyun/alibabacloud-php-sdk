<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DeleteOpaStrategyNewRequest extends Model
{
    /**
     * @var int[]
     */
    public $strategyIds;
    protected $_name = [
        'strategyIds' => 'StrategyIds',
    ];

    public function validate()
    {
        if (\is_array($this->strategyIds)) {
            Model::validateArray($this->strategyIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->strategyIds) {
            if (\is_array($this->strategyIds)) {
                $res['StrategyIds'] = [];
                $n1                 = 0;
                foreach ($this->strategyIds as $item1) {
                    $res['StrategyIds'][$n1++] = $item1;
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
        if (isset($map['StrategyIds'])) {
            if (!empty($map['StrategyIds'])) {
                $model->strategyIds = [];
                $n1                 = 0;
                foreach ($map['StrategyIds'] as $item1) {
                    $model->strategyIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
