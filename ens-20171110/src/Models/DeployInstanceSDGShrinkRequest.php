<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeployInstanceSDGShrinkRequest extends Model
{
    /**
     * @description The deployment type of the SDG. shared: shared read/write splitting deployment. The content of the SDG is read-only, and data updates are written to the local storage of the instance.
     *
     * @example shared
     *
     * @var string
     */
    public $deploymentType;

    /**
     * @description The IDs of the instances. The value is a JSON array that consists of up to 100 IDs.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $instanceIdsShrink;

    /**
     * @description The ID of the SDG.
     *
     * This parameter is required.
     *
     * @example sdg-xxxx
     *
     * @var string
     */
    public $SDGId;
    protected $_name = [
        'deploymentType' => 'DeploymentType',
        'instanceIdsShrink' => 'InstanceIds',
        'SDGId' => 'SDGId',
    ];

    public function validate() {}

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
     * @return DeployInstanceSDGShrinkRequest
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
