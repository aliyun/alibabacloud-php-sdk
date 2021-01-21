<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateResponse\permissions;
use AlibabaCloud\Tea\Model;

class GetTemplateResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $templateBody;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $stackGroupName;

    /**
     * @var string
     */
    public $changeSetId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $templateVersion;

    /**
     * @var string
     */
    public $shareType;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $templateARN;

    /**
     * @var permissions[]
     */
    public $permissions;
    protected $_name = [
        'requestId'       => 'RequestId',
        'templateBody'    => 'TemplateBody',
        'stackId'         => 'StackId',
        'templateId'      => 'TemplateId',
        'stackGroupName'  => 'StackGroupName',
        'changeSetId'     => 'ChangeSetId',
        'regionId'        => 'RegionId',
        'createTime'      => 'CreateTime',
        'description'     => 'Description',
        'templateName'    => 'TemplateName',
        'updateTime'      => 'UpdateTime',
        'templateVersion' => 'TemplateVersion',
        'shareType'       => 'ShareType',
        'ownerId'         => 'OwnerId',
        'templateARN'     => 'TemplateARN',
        'permissions'     => 'Permissions',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('templateBody', $this->templateBody, true);
        Model::validateRequired('stackId', $this->stackId, true);
        Model::validateRequired('templateId', $this->templateId, true);
        Model::validateRequired('stackGroupName', $this->stackGroupName, true);
        Model::validateRequired('changeSetId', $this->changeSetId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('templateName', $this->templateName, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('templateVersion', $this->templateVersion, true);
        Model::validateRequired('shareType', $this->shareType, true);
        Model::validateRequired('ownerId', $this->ownerId, true);
        Model::validateRequired('templateARN', $this->templateARN, true);
        Model::validateRequired('permissions', $this->permissions, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }
        if (null !== $this->changeSetId) {
            $res['ChangeSetId'] = $this->changeSetId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->templateARN) {
            $res['TemplateARN'] = $this->templateARN;
        }
        if (null !== $this->permissions) {
            $res['Permissions'] = [];
            if (null !== $this->permissions && \is_array($this->permissions)) {
                $n = 0;
                foreach ($this->permissions as $item) {
                    $res['Permissions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTemplateResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }
        if (isset($map['ChangeSetId'])) {
            $model->changeSetId = $map['ChangeSetId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['TemplateARN'])) {
            $model->templateARN = $map['TemplateARN'];
        }
        if (isset($map['Permissions'])) {
            if (!empty($map['Permissions'])) {
                $model->permissions = [];
                $n                  = 0;
                foreach ($map['Permissions'] as $item) {
                    $model->permissions[$n++] = null !== $item ? permissions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
