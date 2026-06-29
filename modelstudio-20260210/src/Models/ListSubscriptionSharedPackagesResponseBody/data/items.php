<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListSubscriptionSharedPackagesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListSubscriptionSharedPackagesResponseBody\data\items\equityList;

class items extends Model
{
    /**
     * @var equityList[]
     */
    public $equityList;

    /**
     * @var string
     */
    public $instanceCode;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'equityList' => 'EquityList',
        'instanceCode' => 'InstanceCode',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->equityList)) {
            Model::validateArray($this->equityList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->equityList) {
            if (\is_array($this->equityList)) {
                $res['EquityList'] = [];
                $n1 = 0;
                foreach ($this->equityList as $item1) {
                    $res['EquityList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceCode) {
            $res['InstanceCode'] = $this->instanceCode;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['EquityList'])) {
            if (!empty($map['EquityList'])) {
                $model->equityList = [];
                $n1 = 0;
                foreach ($map['EquityList'] as $item1) {
                    $model->equityList[$n1] = equityList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceCode'])) {
            $model->instanceCode = $map['InstanceCode'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
