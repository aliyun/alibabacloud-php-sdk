<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListAvailableZonesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The time when the zone was created.
     *
     * @example 2022-08-01 20:05:50
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the zone was last updated.
     *
     * @example 2022-08-01 20:05:50
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The ID of the current zone.
     *
     * @example cn-qingdao-b
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description The name of the current zone.
     *
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
