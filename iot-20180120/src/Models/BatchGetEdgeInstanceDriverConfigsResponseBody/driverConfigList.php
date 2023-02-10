<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceDriverConfigsResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceDriverConfigsResponseBody\driverConfigList\configList;
use AlibabaCloud\Tea\Model;

class driverConfigList extends Model
{
    /**
     * @var configList[]
     */
    public $configList;

    /**
     * @example 021d154d2a2f4dd7a489773d9e04****
     *
     * @var string
     */
    public $driverId;
    protected $_name = [
        'configList' => 'ConfigList',
        'driverId'   => 'DriverId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configList) {
            $res['ConfigList'] = [];
            if (null !== $this->configList && \is_array($this->configList)) {
                $n = 0;
                foreach ($this->configList as $item) {
                    $res['ConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->driverId) {
            $res['DriverId'] = $this->driverId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return driverConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigList'])) {
            if (!empty($map['ConfigList'])) {
                $model->configList = [];
                $n                 = 0;
                foreach ($map['ConfigList'] as $item) {
                    $model->configList[$n++] = null !== $item ? configList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DriverId'])) {
            $model->driverId = $map['DriverId'];
        }

        return $model;
    }
}
