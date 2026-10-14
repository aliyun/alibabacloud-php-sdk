<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeClustersV1Request extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $profile;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'clusterType' => 'ClusterType',
        'ensRegionId' => 'EnsRegionId',
        'name' => 'Name',
        'profile' => 'Profile',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }

        return $model;
    }
}
