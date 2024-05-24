<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class FlinkApiProxyRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example /jobs/4df35f8e54554b23bf7dcd38a151****
     *
     * @var string
     */
    public $flinkApiPath;

    /**
     * @description This parameter is required.
     *
     * @example default-namespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @description This parameter is required.
     *
     * @example 5a27a3aa-c5b9-4dc1-8c86-be57d2d6****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description This parameter is required.
     *
     * @example jobs
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'flinkApiPath' => 'flinkApiPath',
        'namespace'    => 'namespace',
        'resourceId'   => 'resourceId',
        'resourceType' => 'resourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flinkApiPath) {
            $res['flinkApiPath'] = $this->flinkApiPath;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FlinkApiProxyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['flinkApiPath'])) {
            $model->flinkApiPath = $map['flinkApiPath'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
