<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteEntryListResponseBody\routeEntrys;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteEntryListResponseBody\routeEntrys\routeEntry\nextHops;

class routeEntry extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var nextHops
     */
    public $nextHops;

    /**
     * @var string
     */
    public $origin;

    /**
     * @var string
     */
    public $routeEntryId;

    /**
     * @var string
     */
    public $routeEntryName;

    /**
     * @var string
     */
    public $routeTableId;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'Description',
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'gmtModified' => 'GmtModified',
        'ipVersion' => 'IpVersion',
        'nextHops' => 'NextHops',
        'origin' => 'Origin',
        'routeEntryId' => 'RouteEntryId',
        'routeEntryName' => 'RouteEntryName',
        'routeTableId' => 'RouteTableId',
        'serviceType' => 'ServiceType',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->nextHops) {
            $this->nextHops->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }

        if (null !== $this->nextHops) {
            $res['NextHops'] = null !== $this->nextHops ? $this->nextHops->toArray($noStream) : $this->nextHops;
        }

        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }

        if (null !== $this->routeEntryId) {
            $res['RouteEntryId'] = $this->routeEntryId;
        }

        if (null !== $this->routeEntryName) {
            $res['RouteEntryName'] = $this->routeEntryName;
        }

        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }

        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }

        if (isset($map['NextHops'])) {
            $model->nextHops = nextHops::fromMap($map['NextHops']);
        }

        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }

        if (isset($map['RouteEntryId'])) {
            $model->routeEntryId = $map['RouteEntryId'];
        }

        if (isset($map['RouteEntryName'])) {
            $model->routeEntryName = $map['RouteEntryName'];
        }

        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }

        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
