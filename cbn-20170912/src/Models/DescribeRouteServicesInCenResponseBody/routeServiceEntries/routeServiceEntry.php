<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteServicesInCenResponseBody\routeServiceEntries;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteServicesInCenResponseBody\routeServiceEntries\routeServiceEntry\cidrs;

class routeServiceEntry extends Model
{
    /**
     * @var string
     */
    public $accessRegionId;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var cidrs
     */
    public $cidrs;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $host;

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
        'cenId' => 'CenId',
        'cidrs' => 'Cidrs',
        'description' => 'Description',
        'host' => 'Host',
        'hostRegionId' => 'HostRegionId',
        'hostVpcId' => 'HostVpcId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->cidrs) {
            $this->cidrs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessRegionId) {
            $res['AccessRegionId'] = $this->accessRegionId;
        }

        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }

        if (null !== $this->cidrs) {
            $res['Cidrs'] = null !== $this->cidrs ? $this->cidrs->toArray($noStream) : $this->cidrs;
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
