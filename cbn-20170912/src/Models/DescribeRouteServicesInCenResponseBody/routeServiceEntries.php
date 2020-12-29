<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteServicesInCenResponseBody;

use AlibabaCloud\Tea\Model;

class routeServiceEntries extends Model
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
     * @var string[]
     */
    public $cidrs;

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
    protected $_name = [
        'status'         => 'Status',
        'host'           => 'Host',
        'description'    => 'Description',
        'hostVpcId'      => 'HostVpcId',
        'cidrs'          => 'Cidrs',
        'cenId'          => 'CenId',
        'accessRegionId' => 'AccessRegionId',
        'hostRegionId'   => 'HostRegionId',
        'updateInterval' => 'UpdateInterval',
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
        if (null !== $this->cidrs) {
            $res['Cidrs'] = $this->cidrs;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeServiceEntries
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
        if (isset($map['Cidrs'])) {
            if (!empty($map['Cidrs'])) {
                $model->cidrs = $map['Cidrs'];
            }
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

        return $model;
    }
}
