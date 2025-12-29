<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListServiceInstanceForPageResponseBody\model;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $relationAvailableCount;

    /**
     * @var int
     */
    public $relationTotalCount;

    /**
     * @var int
     */
    public $sceneId;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $usageId;

    /**
     * @var string
     */
    public $usageName;
    protected $_name = [
        'aliUid' => 'AliUid',
        'code' => 'Code',
        'gmtCreate' => 'GmtCreate',
        'instanceStatus' => 'InstanceStatus',
        'name' => 'Name',
        'relationAvailableCount' => 'RelationAvailableCount',
        'relationTotalCount' => 'RelationTotalCount',
        'sceneId' => 'SceneId',
        'sceneName' => 'SceneName',
        'status' => 'Status',
        'usageId' => 'UsageId',
        'usageName' => 'UsageName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->relationAvailableCount) {
            $res['RelationAvailableCount'] = $this->relationAvailableCount;
        }

        if (null !== $this->relationTotalCount) {
            $res['RelationTotalCount'] = $this->relationTotalCount;
        }

        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->usageId) {
            $res['UsageId'] = $this->usageId;
        }

        if (null !== $this->usageName) {
            $res['UsageName'] = $this->usageName;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RelationAvailableCount'])) {
            $model->relationAvailableCount = $map['RelationAvailableCount'];
        }

        if (isset($map['RelationTotalCount'])) {
            $model->relationTotalCount = $map['RelationTotalCount'];
        }

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UsageId'])) {
            $model->usageId = $map['UsageId'];
        }

        if (isset($map['UsageName'])) {
            $model->usageName = $map['UsageName'];
        }

        return $model;
    }
}
