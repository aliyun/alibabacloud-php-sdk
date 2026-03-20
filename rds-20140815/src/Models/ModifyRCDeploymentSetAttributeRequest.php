<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ModifyRCDeploymentSetAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $deploymentSetId;

    /**
     * @var string
     */
    public $deploymentSetName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'deploymentSetId' => 'DeploymentSetId',
        'deploymentSetName' => 'DeploymentSetName',
        'description' => 'Description',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
        }

        if (null !== $this->deploymentSetName) {
            $res['DeploymentSetName'] = $this->deploymentSetName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
        }

        if (isset($map['DeploymentSetName'])) {
            $model->deploymentSetName = $map['DeploymentSetName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
