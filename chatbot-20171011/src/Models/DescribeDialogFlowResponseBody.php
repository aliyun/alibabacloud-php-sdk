<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class DescribeDialogFlowResponseBody extends Model
{
    /**
     * @example 133208
     *
     * @var string
     */
    public $accountId;

    /**
     * @example 1641953931
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1760998
     *
     * @var string
     */
    public $createUserId;

    /**
     * @example user001
     *
     * @var string
     */
    public $createUserName;

    /**
     * @example 49966
     *
     * @var int
     */
    public $dialogId;

    /**
     * @var string
     */
    public $dialogName;

    /**
     * @example {"name": "", "age": ""}
     *
     * @var mixed[]
     */
    public $globalVars;

    /**
     * @example chatbot-cn-Yvy7uEn7mb
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1641953931
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example 1760998
     *
     * @var string
     */
    public $modifyUserId;

    /**
     * @example user001
     *
     * @var string
     */
    public $modifyUserName;

    /**
     * @var PaasProcessData
     */
    public $moduleDefinition;

    /**
     * @example 49162
     *
     * @var int
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @example 6419BA93-D111-5225-8998-13E63E6D3940
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 0 for deleted, 1 for inSandbox, 2 for draft，3 for online
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description null
     *
     * @example default
     *
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $templates;
    protected $_name = [
        'accountId'        => 'AccountId',
        'createTime'       => 'CreateTime',
        'createUserId'     => 'CreateUserId',
        'createUserName'   => 'CreateUserName',
        'dialogId'         => 'DialogId',
        'dialogName'       => 'DialogName',
        'globalVars'       => 'GlobalVars',
        'instanceId'       => 'InstanceId',
        'modifyTime'       => 'ModifyTime',
        'modifyUserId'     => 'ModifyUserId',
        'modifyUserName'   => 'ModifyUserName',
        'moduleDefinition' => 'ModuleDefinition',
        'moduleId'         => 'ModuleId',
        'moduleName'       => 'ModuleName',
        'requestId'        => 'RequestId',
        'status'           => 'Status',
        'tags'             => 'Tags',
        'templates'        => 'Templates',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }
        if (null !== $this->dialogId) {
            $res['DialogId'] = $this->dialogId;
        }
        if (null !== $this->dialogName) {
            $res['DialogName'] = $this->dialogName;
        }
        if (null !== $this->globalVars) {
            $res['GlobalVars'] = $this->globalVars;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->modifyUserId) {
            $res['ModifyUserId'] = $this->modifyUserId;
        }
        if (null !== $this->modifyUserName) {
            $res['ModifyUserName'] = $this->modifyUserName;
        }
        if (null !== $this->moduleDefinition) {
            $res['ModuleDefinition'] = null !== $this->moduleDefinition ? $this->moduleDefinition->toMap() : null;
        }
        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->templates) {
            $res['Templates'] = $this->templates;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }
        if (isset($map['DialogId'])) {
            $model->dialogId = $map['DialogId'];
        }
        if (isset($map['DialogName'])) {
            $model->dialogName = $map['DialogName'];
        }
        if (isset($map['GlobalVars'])) {
            $model->globalVars = $map['GlobalVars'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['ModifyUserId'])) {
            $model->modifyUserId = $map['ModifyUserId'];
        }
        if (isset($map['ModifyUserName'])) {
            $model->modifyUserName = $map['ModifyUserName'];
        }
        if (isset($map['ModuleDefinition'])) {
            $model->moduleDefinition = PaasProcessData::fromMap($map['ModuleDefinition']);
        }
        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Templates'])) {
            $model->templates = $map['Templates'];
        }

        return $model;
    }
}
