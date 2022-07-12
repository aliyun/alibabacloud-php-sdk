<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\VerifyCenResponseBody;

use AlibabaCloud\Tea\Model;

class routeEntries extends Model
{
    /**
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @var string
     */
    public $nextHopInstanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'nextHopInstanceId'    => 'NextHopInstanceId',
        'regionId'             => 'RegionId',
        'status'               => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->nextHopInstanceId) {
            $res['NextHopInstanceId'] = $this->nextHopInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['NextHopInstanceId'])) {
            $model->nextHopInstanceId = $map['NextHopInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
