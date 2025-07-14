<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryCopilotEmbedConfigResponseBody;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryCopilotEmbedConfigResponseBody\result\dataRange;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Robot\\"s nickname.
     *
     * @example little Q
     *
     * @var string
     */
    public $agentName;

    /**
     * @description Embedding ID.
     *
     * @example 9c079710-ddbe-48b3-b495-7c83c8d57cc4
     *
     * @var string
     */
    public $copilotId;

    /**
     * @description ID of the creator.
     *
     * @example qweqw12312423521
     *
     * @var string
     */
    public $createUser;

    /**
     * @description Nickname of the creator.
     *
     * @example zhangsan
     *
     * @var string
     */
    public $createUserName;

    /**
     * @description Data range (analysis themes and question resources).
     *
     * @var dataRange
     */
    public $dataRange;

    /**
     * @description ID of the modifier.
     *
     * @example asda1231231dfs
     *
     * @var string
     */
    public $modifyUser;

    /**
     * @description Module name.
     *
     * @example little Q
     *
     * @var string
     */
    public $moduleName;

    /**
     * @description Name of the embedded module.
     *
     * @example 0327
     *
     * @var string
     */
    public $showName;
    protected $_name = [
        'agentName' => 'AgentName',
        'copilotId' => 'CopilotId',
        'createUser' => 'CreateUser',
        'createUserName' => 'CreateUserName',
        'dataRange' => 'DataRange',
        'modifyUser' => 'ModifyUser',
        'moduleName' => 'ModuleName',
        'showName' => 'ShowName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }
        if (null !== $this->copilotId) {
            $res['CopilotId'] = $this->copilotId;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }
        if (null !== $this->dataRange) {
            $res['DataRange'] = null !== $this->dataRange ? $this->dataRange->toMap() : null;
        }
        if (null !== $this->modifyUser) {
            $res['ModifyUser'] = $this->modifyUser;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }
        if (isset($map['CopilotId'])) {
            $model->copilotId = $map['CopilotId'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }
        if (isset($map['DataRange'])) {
            $model->dataRange = dataRange::fromMap($map['DataRange']);
        }
        if (isset($map['ModifyUser'])) {
            $model->modifyUser = $map['ModifyUser'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }

        return $model;
    }
}
