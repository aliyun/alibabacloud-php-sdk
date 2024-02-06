<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeploySDGShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $deploymentType;

    /**
     * @var string
     */
    public $instanceIdsShrink;

    /**
     * @example sdg-xxxxx
     *
     * @var string
     */
    public $SDGId;
    protected $_name = [
        'deploymentType'    => 'DeploymentType',
        'instanceIdsShrink' => 'InstanceIds',
        'SDGId'             => 'SDGId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deploymentType) {
            $res['DeploymentType'] = $this->deploymentType;
        }
        if (null !== $this->instanceIdsShrink) {
            $res['InstanceIds'] = $this->instanceIdsShrink;
        }
        if (null !== $this->SDGId) {
            $res['SDGId'] = $this->SDGId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeploySDGShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeploymentType'])) {
            $model->deploymentType = $map['DeploymentType'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIdsShrink = $map['InstanceIds'];
        }
        if (isset($map['SDGId'])) {
            $model->SDGId = $map['SDGId'];
        }

        return $model;
    }
}
