<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServicesResponseBody;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
