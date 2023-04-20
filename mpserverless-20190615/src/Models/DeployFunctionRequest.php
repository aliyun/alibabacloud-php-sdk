<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class DeployFunctionRequest extends Model
{
    /**
     * @example dep-5e49fd471c9d4451c33bdd06
     *
     * @var string
     */
    public $deploymentId;

    /**
     * @example dece4ea0-d432-4cfa-****-8a88d205e2b8xxxx
     *
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'deploymentId' => 'DeploymentId',
        'spaceId'      => 'SpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deploymentId) {
            $res['DeploymentId'] = $this->deploymentId;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeployFunctionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeploymentId'])) {
            $model->deploymentId = $map['DeploymentId'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
