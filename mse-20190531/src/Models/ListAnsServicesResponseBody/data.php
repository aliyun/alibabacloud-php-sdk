<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServicesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $healthyInstanceCount;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $ipCount;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $clusterCount;
    protected $_name = [
        'healthyInstanceCount' => 'HealthyInstanceCount',
        'groupName'            => 'GroupName',
        'ipCount'              => 'IpCount',
        'name'                 => 'Name',
        'clusterCount'         => 'ClusterCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthyInstanceCount) {
            $res['HealthyInstanceCount'] = $this->healthyInstanceCount;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->ipCount) {
            $res['IpCount'] = $this->ipCount;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->clusterCount) {
            $res['ClusterCount'] = $this->clusterCount;
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
        if (isset($map['HealthyInstanceCount'])) {
            $model->healthyInstanceCount = $map['HealthyInstanceCount'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['IpCount'])) {
            $model->ipCount = $map['IpCount'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ClusterCount'])) {
            $model->clusterCount = $map['ClusterCount'];
        }

        return $model;
    }
}
