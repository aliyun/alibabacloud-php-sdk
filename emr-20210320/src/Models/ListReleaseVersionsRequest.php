<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class ListReleaseVersionsRequest extends Model
{
    /**
     * @var string
     */
    public $clusterType;
    /**
     * @var string
     */
    public $iaasType;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterType' => 'ClusterType',
        'iaasType'    => 'IaasType',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }

        if (null !== $this->iaasType) {
            $res['IaasType'] = $this->iaasType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }

        if (isset($map['IaasType'])) {
            $model->iaasType = $map['IaasType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
