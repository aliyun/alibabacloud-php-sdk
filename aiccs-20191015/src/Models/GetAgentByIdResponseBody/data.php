<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentByIdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $agentId;

    /**
     * @var string
     */
    public $createUserName;

    /**
     * @var string
     */
    public $foreignKey;

    /**
     * @var string
     */
    public $foreignNick;

    /**
     * @var string
     */
    public $realName;

    /**
     * @var int
     */
    public $servicerType;

    /**
     * @var string
     */
    public $showName;
    protected $_name = [
        'agentId'        => 'AgentId',
        'createUserName' => 'CreateUserName',
        'foreignKey'     => 'ForeignKey',
        'foreignNick'    => 'ForeignNick',
        'realName'       => 'RealName',
        'servicerType'   => 'ServicerType',
        'showName'       => 'ShowName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }
        if (null !== $this->foreignKey) {
            $res['ForeignKey'] = $this->foreignKey;
        }
        if (null !== $this->foreignNick) {
            $res['ForeignNick'] = $this->foreignNick;
        }
        if (null !== $this->realName) {
            $res['RealName'] = $this->realName;
        }
        if (null !== $this->servicerType) {
            $res['ServicerType'] = $this->servicerType;
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }
        if (isset($map['ForeignKey'])) {
            $model->foreignKey = $map['ForeignKey'];
        }
        if (isset($map['ForeignNick'])) {
            $model->foreignNick = $map['ForeignNick'];
        }
        if (isset($map['RealName'])) {
            $model->realName = $map['RealName'];
        }
        if (isset($map['ServicerType'])) {
            $model->servicerType = $map['ServicerType'];
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }

        return $model;
    }
}
