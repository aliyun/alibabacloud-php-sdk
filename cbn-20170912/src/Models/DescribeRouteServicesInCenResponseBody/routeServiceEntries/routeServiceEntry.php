<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteServicesInCenResponseBody\routeServiceEntries;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteServicesInCenResponseBody\routeServiceEntries\routeServiceEntry\cidrs;
use AlibabaCloud\Tea\Model;

class routeServiceEntry extends Model
{
    /**
     * @description Queries the cloud services that are configured on a Cloud Enterprise Network (CEN) instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $accessRegionId;

    /**
     * @description The ID of the request.
     *
     * @example cen-pfa6ugf3xl0qsd****
     *
     * @var string
     */
    public $cenId;

    /**
     * @var cidrs
     */
    public $cidrs;

    /**
     * @description The service address of the cloud service.
     *
     * @example descname
     *
     * @var string
     */
    public $description;

    /**
     * @description The number of the returned page.
     *
     * @example 100.118.28.0/24
     *
     * @var string
     */
    public $host;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $hostRegionId;

    /**
     * @description The number of entries returned per page.
     *
     * @example vpc-bp1h8vbrbcgohcju5****
     *
     * @var string
     */
    public $hostVpcId;

    /**
     * @description The service address of the cloud service.
     *
     * You can enter a domain name, an IP address, or a CIDR block.
     * @example Active
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'accessRegionId' => 'AccessRegionId',
        'cenId'          => 'CenId',
        'cidrs'          => 'Cidrs',
        'description'    => 'Description',
        'host'           => 'Host',
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
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->cidrs) {
            $res['Cidrs'] = null !== $this->cidrs ? $this->cidrs->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
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
     * @return routeServiceEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessRegionId'])) {
            $model->accessRegionId = $map['AccessRegionId'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['Cidrs'])) {
            $model->cidrs = cidrs::fromMap($map['Cidrs']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
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
