<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class CreateDeploymentTargetRequest extends Model
{
    /**
     * @var ResourceSpec
     */
    public $body;

    /**
     * @description This parameter is required.
     *
     * @example test-dt
     *
     * @var string
     */
    public $deploymentTargetName;
    protected $_name = [
        'body'                 => 'body',
        'deploymentTargetName' => 'deploymentTargetName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->deploymentTargetName) {
            $res['deploymentTargetName'] = $this->deploymentTargetName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDeploymentTargetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = ResourceSpec::fromMap($map['body']);
        }
        if (isset($map['deploymentTargetName'])) {
            $model->deploymentTargetName = $map['deploymentTargetName'];
        }

        return $model;
    }
}
