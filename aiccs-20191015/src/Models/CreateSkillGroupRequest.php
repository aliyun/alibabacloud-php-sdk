<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class CreateSkillGroupRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $skillGroupName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $channelType;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @description 部门ID
     *
     * @var int
     */
    public $departmentId;
    protected $_name = [
        'instanceId'     => 'InstanceId',
        'skillGroupName' => 'SkillGroupName',
        'description'    => 'Description',
        'displayName'    => 'DisplayName',
        'channelType'    => 'ChannelType',
        'clientToken'    => 'ClientToken',
        'departmentId'   => 'DepartmentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->skillGroupName) {
            $res['SkillGroupName'] = $this->skillGroupName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSkillGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SkillGroupName'])) {
            $model->skillGroupName = $map['SkillGroupName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }

        return $model;
    }
}
