<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class CreatePrivilegeCmd extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var int
     */
    public $roleId;

    /**
     * @var StrategyItem[]
     */
    public $strategyItems;

    /**
     * @var string
     */
    public $strategys;
    protected $_name = [
        'accountId' => 'accountId',
        'roleId' => 'roleId',
        'strategyItems' => 'strategyItems',
        'strategys' => 'strategys',
    ];

    public function validate()
    {
        if (\is_array($this->strategyItems)) {
            Model::validateArray($this->strategyItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->roleId) {
            $res['roleId'] = $this->roleId;
        }

        if (null !== $this->strategyItems) {
            if (\is_array($this->strategyItems)) {
                $res['strategyItems'] = [];
                $n1 = 0;
                foreach ($this->strategyItems as $item1) {
                    $res['strategyItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->strategys) {
            $res['strategys'] = $this->strategys;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['roleId'])) {
            $model->roleId = $map['roleId'];
        }

        if (isset($map['strategyItems'])) {
            if (!empty($map['strategyItems'])) {
                $model->strategyItems = [];
                $n1 = 0;
                foreach ($map['strategyItems'] as $item1) {
                    $model->strategyItems[$n1] = StrategyItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['strategys'])) {
            $model->strategys = $map['strategys'];
        }

        return $model;
    }
}
