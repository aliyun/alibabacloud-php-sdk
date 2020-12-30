<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ModifyDomainClusterTypeRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $clusterType;
    protected $_name = [
        'sourceIp'    => 'SourceIp',
        'instanceId'  => 'InstanceId',
        'domain'      => 'Domain',
        'clusterType' => 'ClusterType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDomainClusterTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }

        return $model;
    }
}
