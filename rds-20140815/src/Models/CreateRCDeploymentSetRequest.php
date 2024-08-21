<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateRCDeploymentSetRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $deploymentSetName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $groupCount;

    /**
     * @var string
     */
    public $onUnableToRedeployFailedInstance;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $strategy;
    protected $_name = [
        'clientToken'                      => 'ClientToken',
        'deploymentSetName'                => 'DeploymentSetName',
        'description'                      => 'Description',
        'groupCount'                       => 'GroupCount',
        'onUnableToRedeployFailedInstance' => 'OnUnableToRedeployFailedInstance',
        'regionId'                         => 'RegionId',
        'strategy'                         => 'Strategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->deploymentSetName) {
            $res['DeploymentSetName'] = $this->deploymentSetName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupCount) {
            $res['GroupCount'] = $this->groupCount;
        }
        if (null !== $this->onUnableToRedeployFailedInstance) {
            $res['OnUnableToRedeployFailedInstance'] = $this->onUnableToRedeployFailedInstance;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRCDeploymentSetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DeploymentSetName'])) {
            $model->deploymentSetName = $map['DeploymentSetName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupCount'])) {
            $model->groupCount = $map['GroupCount'];
        }
        if (isset($map['OnUnableToRedeployFailedInstance'])) {
            $model->onUnableToRedeployFailedInstance = $map['OnUnableToRedeployFailedInstance'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }

        return $model;
    }
}
