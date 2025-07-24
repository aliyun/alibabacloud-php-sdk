<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class GetDoctorHDFSClusterRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     *
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Specify the date in the ISO 8601 standard. For example, 2023-01-01 represents January 1, 2023.
     *
     * This parameter is required.
     *
     * @example 2023-01-01
     *
     * @var string
     */
    public $dateTime;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'dateTime' => 'DateTime',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDoctorHDFSClusterRequest
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

        return $model;
    }
}
