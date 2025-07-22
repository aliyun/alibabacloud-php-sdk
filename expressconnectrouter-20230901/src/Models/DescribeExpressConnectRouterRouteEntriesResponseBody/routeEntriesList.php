<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterRouteEntriesResponseBody;

use AlibabaCloud\Tea\Model;

class routeEntriesList extends Model
{
    /**
     * @description The AS path of the route.
     *
     * @example [64993,64512]
     *
     * @var string
     */
    public $asPath;

    /**
     * @description The community value that is carried in the BGP route.
     *
     * @example 9001:9263
     *
     * @var string
     */
    public $community;

    /**
     * @description The destination CIDR block of the route.
     *
     * @example 192.168.0.0/16
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description The MED value of the BGP route, which is used between the ECR and the transit router.
     *
     *   You can set the MED value to 2000. In this case, the transit router and the ECR are used as default paths.
     *   If a non-default path is used, the MED value is empty.
     *   You can set the MED value to 2000 only for one object associated with a transit router of a CEN instance.
     *
     * @example 2000
     *
     * @var int
     */
    public $med;

    /**
     * @description The ID of the next-hop instance.
     *
     * @example br-hp3u4u5f03tfuljis****
     *
     * @var string
     */
    public $nexthopInstanceId;

    /**
     * @description The region ID of the next-hop instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $nexthopInstanceRegionId;

    /**
     * @description The state of the ECR.
     *
     * @example ACTIVE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'asPath' => 'AsPath',
        'community' => 'Community',
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'med' => 'Med',
        'nexthopInstanceId' => 'NexthopInstanceId',
        'nexthopInstanceRegionId' => 'NexthopInstanceRegionId',
        'status' => 'Status',
    ];

    public function validate() {}

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
        if (null !== $this->med) {
            $res['Med'] = $this->med;
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
        if (isset($map['Med'])) {
            $model->med = $map['Med'];
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
