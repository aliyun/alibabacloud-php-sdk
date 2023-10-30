<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models\DeleteNamespaceRequest;

use AlibabaCloud\Tea\Model;

class deleteNamespaceRequest extends Model
{
    /**
     * @example sc_flinkserverlesspost_public_cn-0ju2bj2****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example ns-1
     *
     * @var string
     */
    public $namespace;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'namespace'  => 'Namespace',
        'region'     => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deleteNamespaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
