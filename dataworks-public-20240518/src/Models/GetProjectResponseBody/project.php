<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProjectResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProjectResponseBody\project\aliyunResourceTags;

class project extends Model
{
    /**
     * @var string
     */
    public $aliyunResourceGroupId;

    /**
     * @var aliyunResourceTags[]
     */
    public $aliyunResourceTags;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $devEnvironmentEnabled;

    /**
     * @var bool
     */
    public $devRoleDisabled;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var bool
     */
    public $paiTaskEnabled;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'aliyunResourceGroupId' => 'AliyunResourceGroupId',
        'aliyunResourceTags' => 'AliyunResourceTags',
        'description' => 'Description',
        'devEnvironmentEnabled' => 'DevEnvironmentEnabled',
        'devRoleDisabled' => 'DevRoleDisabled',
        'displayName' => 'DisplayName',
        'id' => 'Id',
        'name' => 'Name',
        'owner' => 'Owner',
        'paiTaskEnabled' => 'PaiTaskEnabled',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->aliyunResourceTags)) {
            Model::validateArray($this->aliyunResourceTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunResourceGroupId) {
            $res['AliyunResourceGroupId'] = $this->aliyunResourceGroupId;
        }

        if (null !== $this->aliyunResourceTags) {
            if (\is_array($this->aliyunResourceTags)) {
                $res['AliyunResourceTags'] = [];
                $n1 = 0;
                foreach ($this->aliyunResourceTags as $item1) {
                    $res['AliyunResourceTags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->devEnvironmentEnabled) {
            $res['DevEnvironmentEnabled'] = $this->devEnvironmentEnabled;
        }

        if (null !== $this->devRoleDisabled) {
            $res['DevRoleDisabled'] = $this->devRoleDisabled;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->paiTaskEnabled) {
            $res['PaiTaskEnabled'] = $this->paiTaskEnabled;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AliyunResourceGroupId'])) {
            $model->aliyunResourceGroupId = $map['AliyunResourceGroupId'];
        }

        if (isset($map['AliyunResourceTags'])) {
            if (!empty($map['AliyunResourceTags'])) {
                $model->aliyunResourceTags = [];
                $n1 = 0;
                foreach ($map['AliyunResourceTags'] as $item1) {
                    $model->aliyunResourceTags[$n1++] = aliyunResourceTags::fromMap($item1);
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DevEnvironmentEnabled'])) {
            $model->devEnvironmentEnabled = $map['DevEnvironmentEnabled'];
        }

        if (isset($map['DevRoleDisabled'])) {
            $model->devRoleDisabled = $map['DevRoleDisabled'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['PaiTaskEnabled'])) {
            $model->paiTaskEnabled = $map['PaiTaskEnabled'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
