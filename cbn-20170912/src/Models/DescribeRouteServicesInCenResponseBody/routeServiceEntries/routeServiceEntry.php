<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteServicesInCenResponseBody\routeServiceEntries;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteServicesInCenResponseBody\routeServiceEntries\routeServiceEntry\cidrs;
use AlibabaCloud\Tea\Model;

class routeServiceEntry extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $hostVpcId;

    /**
     * @var string
     */
    public $cenId;

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
    public $updateInterval;

    /**
     * @var cidrs
     */
    public $cidrs;
    protected $_name = [
        'status'         => 'Status',
        'host'           => 'Host',
        'description'    => 'Description',
        'hostVpcId'      => 'HostVpcId',
        'cenId'          => 'CenId',
        'accessRegionId' => 'AccessRegionId',
        'hostRegionId'   => 'HostRegionId',
        'updateInterval' => 'UpdateInterval',
        'cidrs'          => 'Cidrs',
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
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->hostVpcId) {
            $res['HostVpcId'] = $this->hostVpcId;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->accessRegionId) {
            $res['AccessRegionId'] = $this->accessRegionId;
        }
        if (null !== $this->hostRegionId) {
            $res['HostRegionId'] = $this->hostRegionId;
        }
        if (null !== $this->updateInterval) {
            $res['UpdateInterval'] = $this->updateInterval;
        }
        if (null !== $this->cidrs) {
            $res['Cidrs'] = null !== $this->cidrs ? $this->cidrs->toMap() : null;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HostVpcId'])) {
            $model->hostVpcId = $map['HostVpcId'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['AccessRegionId'])) {
            $model->accessRegionId = $map['AccessRegionId'];
        }
        if (isset($map['HostRegionId'])) {
            $model->hostRegionId = $map['HostRegionId'];
        }
        if (isset($map['UpdateInterval'])) {
            $model->updateInterval = $map['UpdateInterval'];
        }
        if (isset($map['Cidrs'])) {
            $model->cidrs = cidrs::fromMap($map['Cidrs']);
        }

        return $model;
    }
}
