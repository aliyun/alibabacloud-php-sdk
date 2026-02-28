<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceDriverConfigsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceDriverConfigsResponseBody\driverConfigList\configList;

class driverConfigList extends Model
{
    /**
     * @var configList[]
     */
    public $configList;

    /**
     * @var string
     */
    public $driverId;
    protected $_name = [
        'configList' => 'ConfigList',
        'driverId' => 'DriverId',
    ];

    public function validate()
    {
        if (\is_array($this->configList)) {
            Model::validateArray($this->configList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configList) {
            if (\is_array($this->configList)) {
                $res['ConfigList'] = [];
                $n1 = 0;
                foreach ($this->configList as $item1) {
                    $res['ConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->driverId) {
            $res['DriverId'] = $this->driverId;
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
        if (isset($map['ConfigList'])) {
            if (!empty($map['ConfigList'])) {
                $model->configList = [];
                $n1 = 0;
                foreach ($map['ConfigList'] as $item1) {
                    $model->configList[$n1] = configList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DriverId'])) {
            $model->driverId = $map['DriverId'];
        }

        return $model;
    }
}
