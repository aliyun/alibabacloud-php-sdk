<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListAvailableZonesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2022-08-01 20:05:50
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2022-08-01 20:05:50
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example cn-qingdao-b
     *
     * @var string
     */
    public $zoneId;

    /**
     * @example ha-cn-t9b30w902vm_qrs
     *
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'createTime' => 'createTime',
        'updateTime' => 'updateTime',
        'zoneId'     => 'zoneId',
        'zoneName'   => 'zoneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }
        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
        }
        if (null !== $this->zoneName) {
            $res['zoneName'] = $this->zoneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }
        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }
        if (isset($map['zoneName'])) {
            $model->zoneName = $map['zoneName'];
        }

        return $model;
    }
}
