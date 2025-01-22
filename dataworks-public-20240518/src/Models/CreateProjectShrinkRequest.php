<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateProjectShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunResourceGroupId;
    /**
     * @var string
     */
    public $aliyunResourceTagsShrink;
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
     * @var string
     */
    public $name;
    /**
     * @var bool
     */
    public $paiTaskEnabled;
    protected $_name = [
        'aliyunResourceGroupId'    => 'AliyunResourceGroupId',
        'aliyunResourceTagsShrink' => 'AliyunResourceTags',
        'description'              => 'Description',
        'devEnvironmentEnabled'    => 'DevEnvironmentEnabled',
        'devRoleDisabled'          => 'DevRoleDisabled',
        'displayName'              => 'DisplayName',
        'name'                     => 'Name',
        'paiTaskEnabled'           => 'PaiTaskEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunResourceGroupId) {
            $res['AliyunResourceGroupId'] = $this->aliyunResourceGroupId;
        }

        if (null !== $this->aliyunResourceTagsShrink) {
            $res['AliyunResourceTags'] = $this->aliyunResourceTagsShrink;
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

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->paiTaskEnabled) {
            $res['PaiTaskEnabled'] = $this->paiTaskEnabled;
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
            $model->aliyunResourceTagsShrink = $map['AliyunResourceTags'];
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PaiTaskEnabled'])) {
            $model->paiTaskEnabled = $map['PaiTaskEnabled'];
        }

        return $model;
    }
}
