<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryCopilotEmbedConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryCopilotEmbedConfigResponseBody\result\dataRange;

class result extends Model
{
    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $copilotId;

    /**
     * @var string
     */
    public $createUser;

    /**
     * @var string
     */
    public $createUserName;

    /**
     * @var dataRange
     */
    public $dataRange;

    /**
     * @var string
     */
    public $modifyUser;

    /**
     * @var string
     */
    public $moduleName;

    /**
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

    public function validate()
    {
        if (null !== $this->dataRange) {
            $this->dataRange->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['DataRange'] = null !== $this->dataRange ? $this->dataRange->toArray($noStream) : $this->dataRange;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
