<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenPrivateZoneRoutesResponseBody\privateZoneInfos;

use AlibabaCloud\Tea\Model;

class privateZoneInfo extends Model
{
    /**
     * @description The ID of the region where PrivateZone is accessed.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $accessRegionId;

    /**
     * @description The ID of the region where PrivateZone is deployed.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $hostRegionId;

    /**
     * @description The ID of the VPC that is associated with PrivateZone.
     *
     * @example vpc-bp18sth14qii3pnvo****
     *
     * @var string
     */
    public $hostVpcId;

    /**
     * @description The status of PrivateZone. Valid values:
     *
     *   **Creating**: being created
     *   **Active**: available
     *   **Deleting**: being deleted
     *
     * @example Active
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'accessRegionId' => 'AccessRegionId',
        'hostRegionId'   => 'HostRegionId',
        'hostVpcId'      => 'HostVpcId',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessRegionId) {
            $res['AccessRegionId'] = $this->accessRegionId;
        }
        if (null !== $this->hostRegionId) {
            $res['HostRegionId'] = $this->hostRegionId;
        }
        if (null !== $this->hostVpcId) {
            $res['HostVpcId'] = $this->hostVpcId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privateZoneInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessRegionId'])) {
            $model->accessRegionId = $map['AccessRegionId'];
        }
        if (isset($map['HostRegionId'])) {
            $model->hostRegionId = $map['HostRegionId'];
        }
        if (isset($map['HostVpcId'])) {
            $model->hostVpcId = $map['HostVpcId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
