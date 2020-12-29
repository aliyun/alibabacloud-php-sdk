<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenPrivateZoneRoutesResponseBody;

use AlibabaCloud\Tea\Model;

class privateZoneInfos extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $hostVpcId;

    /**
     * @var string
     */
    public $accessRegionId;

    /**
     * @var string
     */
    public $hostRegionId;
    protected $_name = [
        'status'         => 'Status',
        'hostVpcId'      => 'HostVpcId',
        'accessRegionId' => 'AccessRegionId',
        'hostRegionId'   => 'HostRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->hostVpcId) {
            $res['HostVpcId'] = $this->hostVpcId;
        }
        if (null !== $this->accessRegionId) {
            $res['AccessRegionId'] = $this->accessRegionId;
        }
        if (null !== $this->hostRegionId) {
            $res['HostRegionId'] = $this->hostRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privateZoneInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['HostVpcId'])) {
            $model->hostVpcId = $map['HostVpcId'];
        }
        if (isset($map['AccessRegionId'])) {
            $model->accessRegionId = $map['AccessRegionId'];
        }
        if (isset($map['HostRegionId'])) {
            $model->hostRegionId = $map['HostRegionId'];
        }

        return $model;
    }
}
