<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GenerateServicePolicyResponseBody;

use AlibabaCloud\Tea\Model;

class missingPolicy extends Model
{
    /**
     * @description Operations on specific resources.
     *
     * @var string[]
     */
    public $action;

    /**
     * @description The specific objects authorized. An asterisk (*) denotes all resources.
     *
     * @example *
     *
     * @var string
     */
    public $resource;

    /**
     * @description The name of the service.
     *
     * @example ecs
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'action'      => 'Action',
        'resource'    => 'Resource',
        'serviceName' => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return missingPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            if (!empty($map['Action'])) {
                $model->action = $map['Action'];
            }
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
