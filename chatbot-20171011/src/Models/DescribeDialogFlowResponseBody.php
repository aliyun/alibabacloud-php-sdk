<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class DescribeDialogFlowResponseBody extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUserId;

    /**
     * @var string
     */
    public $templates;

    /**
     * @var int
     */
    public $dialogId;

    /**
     * @var mixed[]
     */
    public $globalVars;

    /**
     * @var string
     */
    public $createUserName;

    /**
     * @var int
     */
    public $moduleId;

    /**
     * @var PaasProcessData
     */
    public $moduleDefinition;

    /**
     * @var string
     */
    public $dialogName;

    /**
     * @var string
     */
    public $modifyUserId;

    /**
     * @var string
     */
    public $modifyUserName;

    /**
     * @var string
     */
    public $tags;
    protected $_name = [
        'status'           => 'Status',
        'modifyTime'       => 'ModifyTime',
        'accountId'        => 'AccountId',
        'requestId'        => 'RequestId',
        'instanceId'       => 'InstanceId',
        'moduleName'       => 'ModuleName',
        'createTime'       => 'CreateTime',
        'createUserId'     => 'CreateUserId',
        'templates'        => 'Templates',
        'dialogId'         => 'DialogId',
        'globalVars'       => 'GlobalVars',
        'createUserName'   => 'CreateUserName',
        'moduleId'         => 'ModuleId',
        'moduleDefinition' => 'ModuleDefinition',
        'dialogName'       => 'DialogName',
        'modifyUserId'     => 'ModifyUserId',
        'modifyUserName'   => 'ModifyUserName',
        'tags'             => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->templates) {
            $res['Templates'] = $this->templates;
        }
        if (null !== $this->dialogId) {
            $res['DialogId'] = $this->dialogId;
        }
        if (null !== $this->globalVars) {
            $res['GlobalVars'] = $this->globalVars;
        }
        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }
        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
        }
        if (null !== $this->moduleDefinition) {
            $res['ModuleDefinition'] = null !== $this->moduleDefinition ? $this->moduleDefinition->toMap() : null;
        }
        if (null !== $this->dialogName) {
            $res['DialogName'] = $this->dialogName;
        }
        if (null !== $this->modifyUserId) {
            $res['ModifyUserId'] = $this->modifyUserId;
        }
        if (null !== $this->modifyUserName) {
            $res['ModifyUserName'] = $this->modifyUserName;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDialogFlowResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['Templates'])) {
            $model->templates = $map['Templates'];
        }
        if (isset($map['DialogId'])) {
            $model->dialogId = $map['DialogId'];
        }
        if (isset($map['GlobalVars'])) {
            $model->globalVars = $map['GlobalVars'];
        }
        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }
        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
        }
        if (isset($map['ModuleDefinition'])) {
            $model->moduleDefinition = PaasProcessData::fromMap($map['ModuleDefinition']);
        }
        if (isset($map['DialogName'])) {
            $model->dialogName = $map['DialogName'];
        }
        if (isset($map['ModifyUserId'])) {
            $model->modifyUserId = $map['ModifyUserId'];
        }
        if (isset($map['ModifyUserName'])) {
            $model->modifyUserName = $map['ModifyUserName'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
