<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterRouteEntriesResponseBody;

use AlibabaCloud\Tea\Model;

class routeEntriesList extends Model
{
    /**
     * @example [64993,64512]
     *
     * @var string
     */
    public $asPath;

    /**
     * @example 9001:9263
     *
     * @var string
     */
    public $community;

    /**
     * @example 192.168.0.0/16
     *
     * @var string
     */
    public $destinationCidrBlock;

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

    /**
     * @example ACTIVE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'asPath'                  => 'AsPath',
        'community'               => 'Community',
        'destinationCidrBlock'    => 'DestinationCidrBlock',
        'nexthopInstanceId'       => 'NexthopInstanceId',
        'nexthopInstanceRegionId' => 'NexthopInstanceRegionId',
        'status'                  => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asPath) {
            $res['AsPath'] = $this->asPath;
        }
        if (null !== $this->community) {
            $res['Community'] = $this->community;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->nexthopInstanceId) {
            $res['NexthopInstanceId'] = $this->nexthopInstanceId;
        }
        if (null !== $this->nexthopInstanceRegionId) {
            $res['NexthopInstanceRegionId'] = $this->nexthopInstanceRegionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeEntriesList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsPath'])) {
            $model->asPath = $map['AsPath'];
        }
        if (isset($map['Community'])) {
            $model->community = $map['Community'];
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['NexthopInstanceId'])) {
            $model->nexthopInstanceId = $map['NexthopInstanceId'];
        }
        if (isset($map['NexthopInstanceRegionId'])) {
            $model->nexthopInstanceRegionId = $map['NexthopInstanceRegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
