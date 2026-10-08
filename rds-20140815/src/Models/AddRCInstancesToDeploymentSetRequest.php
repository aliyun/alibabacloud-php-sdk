<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class AddRCInstancesToDeploymentSetRequest extends Model
{
    /**
     * @var string
     */
    public $deploymentSetGroupNo;

    /**
     * @var string
     */
    public $deploymentSetId;

    /**
     * @var bool
     */
    public $force;

    /**
     * @var string
     */
    public $RCInstanceIds;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'deploymentSetGroupNo' => 'DeploymentSetGroupNo',
        'deploymentSetId' => 'DeploymentSetId',
        'force' => 'Force',
        'RCInstanceIds' => 'RCInstanceIds',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deploymentSetGroupNo) {
            $res['DeploymentSetGroupNo'] = $this->deploymentSetGroupNo;
        }

        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
        }

        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }

        if (null !== $this->RCInstanceIds) {
            $res['RCInstanceIds'] = $this->RCInstanceIds;
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
        if (isset($map['DeploymentSetGroupNo'])) {
            $model->deploymentSetGroupNo = $map['DeploymentSetGroupNo'];
        }

        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
        }

        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }

        if (isset($map['RCInstanceIds'])) {
            $model->RCInstanceIds = $map['RCInstanceIds'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
