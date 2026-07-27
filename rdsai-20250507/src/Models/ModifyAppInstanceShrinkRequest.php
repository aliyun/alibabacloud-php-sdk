<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class ModifyAppInstanceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $branchName;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $componentsShrink;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'branchName' => 'BranchName',
        'clientToken' => 'ClientToken',
        'componentsShrink' => 'Components',
        'DBInstanceName' => 'DBInstanceName',
        'instanceClass' => 'InstanceClass',
        'instanceName' => 'InstanceName',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->branchName) {
            $res['BranchName'] = $this->branchName;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->componentsShrink) {
            $res['Components'] = $this->componentsShrink;
        }

        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
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
        if (isset($map['BranchName'])) {
            $model->branchName = $map['BranchName'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Components'])) {
            $model->componentsShrink = $map['Components'];
        }

        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
