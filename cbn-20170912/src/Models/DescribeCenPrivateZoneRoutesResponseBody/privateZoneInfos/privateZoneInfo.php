<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenPrivateZoneRoutesResponseBody\privateZoneInfos;

use AlibabaCloud\Dara\Model;

class privateZoneInfo extends Model
{
    /**
     * @var string
     */
    public $accessRegionId;

    /**
     * @var string
     */
    public $hostRegionId;

    /**
     * @var string
     */
    public $hostVpcId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'accessRegionId' => 'AccessRegionId',
        'hostRegionId' => 'HostRegionId',
        'hostVpcId' => 'HostVpcId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
