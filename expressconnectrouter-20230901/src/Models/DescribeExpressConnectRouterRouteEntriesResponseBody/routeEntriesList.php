<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterRouteEntriesResponseBody;

use AlibabaCloud\Dara\Model;

class routeEntriesList extends Model
{
    /**
     * @var string
     */
    public $asPath;
    /**
     * @var string
     */
    public $community;
    /**
     * @var string
     */
    public $destinationCidrBlock;
    /**
     * @var int
     */
    public $med;
    /**
     * @var string
     */
    public $nexthopInstanceId;
    /**
     * @var string
     */
    public $nexthopInstanceRegionId;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'asPath'                  => 'AsPath',
        'community'               => 'Community',
        'destinationCidrBlock'    => 'DestinationCidrBlock',
        'med'                     => 'Med',
        'nexthopInstanceId'       => 'NexthopInstanceId',
        'nexthopInstanceRegionId' => 'NexthopInstanceRegionId',
        'status'                  => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
