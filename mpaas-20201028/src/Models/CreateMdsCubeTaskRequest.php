<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Dara\Model;

class CreateMdsCubeTaskRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $greyConfigInfo;

    /**
     * @var string
     */
    public $greyEndtimeData;

    /**
     * @var int
     */
    public $greyNum;

    /**
     * @var int
     */
    public $publishMode;

    /**
     * @var int
     */
    public $publishType;

    /**
     * @var string
     */
    public $taskDesc;

    /**
     * @var int
     */
    public $templateResourceId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $whitelistIds;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId' => 'AppId',
        'greyConfigInfo' => 'GreyConfigInfo',
        'greyEndtimeData' => 'GreyEndtimeData',
        'greyNum' => 'GreyNum',
        'publishMode' => 'PublishMode',
        'publishType' => 'PublishType',
        'taskDesc' => 'TaskDesc',
        'templateResourceId' => 'TemplateResourceId',
        'tenantId' => 'TenantId',
        'whitelistIds' => 'WhitelistIds',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->greyConfigInfo) {
            $res['GreyConfigInfo'] = $this->greyConfigInfo;
        }

        if (null !== $this->greyEndtimeData) {
            $res['GreyEndtimeData'] = $this->greyEndtimeData;
        }

        if (null !== $this->greyNum) {
            $res['GreyNum'] = $this->greyNum;
        }

        if (null !== $this->publishMode) {
            $res['PublishMode'] = $this->publishMode;
        }

        if (null !== $this->publishType) {
            $res['PublishType'] = $this->publishType;
        }

        if (null !== $this->taskDesc) {
            $res['TaskDesc'] = $this->taskDesc;
        }

        if (null !== $this->templateResourceId) {
            $res['TemplateResourceId'] = $this->templateResourceId;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->whitelistIds) {
            $res['WhitelistIds'] = $this->whitelistIds;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['GreyConfigInfo'])) {
            $model->greyConfigInfo = $map['GreyConfigInfo'];
        }

        if (isset($map['GreyEndtimeData'])) {
            $model->greyEndtimeData = $map['GreyEndtimeData'];
        }

        if (isset($map['GreyNum'])) {
            $model->greyNum = $map['GreyNum'];
        }

        if (isset($map['PublishMode'])) {
            $model->publishMode = $map['PublishMode'];
        }

        if (isset($map['PublishType'])) {
            $model->publishType = $map['PublishType'];
        }

        if (isset($map['TaskDesc'])) {
            $model->taskDesc = $map['TaskDesc'];
        }

        if (isset($map['TemplateResourceId'])) {
            $model->templateResourceId = $map['TemplateResourceId'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['WhitelistIds'])) {
            $model->whitelistIds = $map['WhitelistIds'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
