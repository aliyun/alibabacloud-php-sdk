<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServicesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The total number of clusters.
     *
     * @example 1
     *
     * @var int
     */
    public $clusterCount;

    /**
     * @description The name of the contact group.
     *
     * @example name
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The total number of instances with healthy heartbeats.
     *
     * @example 1
     *
     * @var int
     */
    public $healthyInstanceCount;

    /**
     * @description The total number of instances that are used for the current service.
     *
     * @example 1
     *
     * @var int
     */
    public $ipCount;

    /**
     * @description The name of the service.
     *
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'clusterCount'         => 'ClusterCount',
        'groupName'            => 'GroupName',
        'healthyInstanceCount' => 'HealthyInstanceCount',
        'ipCount'              => 'IpCount',
        'name'                 => 'Name',
        'source'               => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterCount) {
            $res['ClusterCount'] = $this->clusterCount;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->healthyInstanceCount) {
            $res['HealthyInstanceCount'] = $this->healthyInstanceCount;
        }
        if (null !== $this->ipCount) {
            $res['IpCount'] = $this->ipCount;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterCount'])) {
            $model->clusterCount = $map['ClusterCount'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['HealthyInstanceCount'])) {
            $model->healthyInstanceCount = $map['HealthyInstanceCount'];
        }
        if (isset($map['IpCount'])) {
            $model->ipCount = $map['IpCount'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
