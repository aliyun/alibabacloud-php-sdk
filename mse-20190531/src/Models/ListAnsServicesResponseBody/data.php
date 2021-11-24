<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServicesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $clusterCount;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $healthyInstanceCount;

    /**
     * @var int
     */
    public $ipCount;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'clusterCount'         => 'ClusterCount',
        'groupName'            => 'GroupName',
        'healthyInstanceCount' => 'HealthyInstanceCount',
        'ipCount'              => 'IpCount',
        'name'                 => 'Name',
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

        return $model;
    }
}
