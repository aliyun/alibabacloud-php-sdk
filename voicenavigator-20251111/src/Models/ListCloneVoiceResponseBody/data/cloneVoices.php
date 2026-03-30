<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListCloneVoiceResponseBody\data;

use AlibabaCloud\Dara\Model;

class cloneVoices extends Model
{
    /**
     * @var string
     */
    public $cloneVoiceId;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nlsEngine;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var int
     */
    public $updatedTime;

    /**
     * @var string
     */
    public $voice;
    protected $_name = [
        'cloneVoiceId' => 'CloneVoiceId',
        'createdTime' => 'CreatedTime',
        'instanceId' => 'InstanceId',
        'model' => 'Model',
        'name' => 'Name',
        'nlsEngine' => 'NlsEngine',
        'status' => 'Status',
        'tenantId' => 'TenantId',
        'updatedTime' => 'UpdatedTime',
        'voice' => 'Voice',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloneVoiceId) {
            $res['CloneVoiceId'] = $this->cloneVoiceId;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nlsEngine) {
            $res['NlsEngine'] = $this->nlsEngine;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        if (null !== $this->voice) {
            $res['Voice'] = $this->voice;
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
        if (isset($map['CloneVoiceId'])) {
            $model->cloneVoiceId = $map['CloneVoiceId'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NlsEngine'])) {
            $model->nlsEngine = $map['NlsEngine'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        if (isset($map['Voice'])) {
            $model->voice = $map['Voice'];
        }

        return $model;
    }
}
