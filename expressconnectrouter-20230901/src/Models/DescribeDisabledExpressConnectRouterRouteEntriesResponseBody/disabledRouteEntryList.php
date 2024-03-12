<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeDisabledExpressConnectRouterRouteEntriesResponseBody;

use AlibabaCloud\Tea\Model;

class disabledRouteEntryList extends Model
{
    /**
     * @example 192.168.100.110/32
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @example ecr-mezk2idmsd0vx2****
     *
     * @var string
     */
    public $ecrId;

    /**
     * @example 1682317345
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example br-hp3u4u5f03tfuljis****
     *
     * @var string
     */
    public $nexthopInstanceId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $nexthopInstanceRegionId;
    protected $_name = [
        'destinationCidrBlock'    => 'DestinationCidrBlock',
        'ecrId'                   => 'EcrId',
        'gmtCreate'               => 'GmtCreate',
        'nexthopInstanceId'       => 'NexthopInstanceId',
        'nexthopInstanceRegionId' => 'NexthopInstanceRegionId',
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
        if (null !== $this->ecrId) {
            $res['EcrId'] = $this->ecrId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->nexthopInstanceId) {
            $res['NexthopInstanceId'] = $this->nexthopInstanceId;
        }
        if (null !== $this->nexthopInstanceRegionId) {
            $res['NexthopInstanceRegionId'] = $this->nexthopInstanceRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return disabledRouteEntryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['EcrId'])) {
            $model->ecrId = $map['EcrId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['NexthopInstanceId'])) {
            $model->nexthopInstanceId = $map['NexthopInstanceId'];
        }
        if (isset($map['NexthopInstanceRegionId'])) {
            $model->nexthopInstanceRegionId = $map['NexthopInstanceRegionId'];
        }

        return $model;
    }
}
