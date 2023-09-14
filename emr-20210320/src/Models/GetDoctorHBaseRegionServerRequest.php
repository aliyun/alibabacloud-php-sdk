<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class GetDoctorHBaseRegionServerRequest extends Model
{
    /**
     * @description 集群ID。
     *
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 2023-01-01
     *
     * @var string
     */
    public $dateTime;

    /**
     * @description 区域ID。
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example emr-worker-4.cluster-20****
     *
     * @var string
     */
    public $regionServerHost;
    protected $_name = [
        'clusterId'        => 'ClusterId',
        'dateTime'         => 'DateTime',
        'regionId'         => 'RegionId',
        'regionServerHost' => 'RegionServerHost',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dateTime) {
            $res['DateTime'] = $this->dateTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->regionServerHost) {
            $res['RegionServerHost'] = $this->regionServerHost;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDoctorHBaseRegionServerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DateTime'])) {
            $model->dateTime = $map['DateTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegionServerHost'])) {
            $model->regionServerHost = $map['RegionServerHost'];
        }

        return $model;
    }
}
