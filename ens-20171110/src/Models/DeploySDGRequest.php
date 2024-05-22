<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeploySDGRequest extends Model
{
    /**
     * @description The SDG deployment type. Valid values:
     *
     *   common (default): read/write deployment. Data updates are written to disks.
     *   overlay: read/write splitting deployment. Content in SDGs is read-only. Data updates are written to the local storage of the instance.
     *
     * @example common
     *
     * @var string
     */
    public $deploymentType;

    /**
     * @description The IDs of instances on which you want to deploy SDGs. You can deploy SDGs on a maximum of 100 instances at a time.
     *
     * This parameter is required.
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The SDG ID. This parameter is used to create a disk, which is attached to an instance.
     *
     * This parameter is required.
     * @example sdg-xxxxx
     *
     * @var string
     */
    public $SDGId;
    protected $_name = [
        'deploymentType' => 'DeploymentType',
        'instanceIds'    => 'InstanceIds',
        'SDGId'          => 'SDGId',
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
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->SDGId) {
            $res['SDGId'] = $this->SDGId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeploySDGRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeploymentType'])) {
            $model->deploymentType = $map['DeploymentType'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['SDGId'])) {
            $model->SDGId = $map['SDGId'];
        }

        return $model;
    }
}
