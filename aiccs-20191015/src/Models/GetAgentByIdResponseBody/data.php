<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentByIdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $showName;

    /**
     * @var string
     */
    public $foreignKey;

    /**
     * @var int
     */
    public $servicerType;

    /**
     * @var string
     */
    public $realName;

    /**
     * @var string
     */
    public $createUserName;

    /**
     * @var int
     */
    public $agentId;

    /**
     * @var string
     */
    public $foreignNick;
    protected $_name = [
        'showName'       => 'ShowName',
        'foreignKey'     => 'ForeignKey',
        'servicerType'   => 'ServicerType',
        'realName'       => 'RealName',
        'createUserName' => 'CreateUserName',
        'agentId'        => 'AgentId',
        'foreignNick'    => 'ForeignNick',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }
        if (null !== $this->foreignKey) {
            $res['ForeignKey'] = $this->foreignKey;
        }
        if (null !== $this->servicerType) {
            $res['ServicerType'] = $this->servicerType;
        }
        if (null !== $this->realName) {
            $res['RealName'] = $this->realName;
        }
        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->foreignNick) {
            $res['ForeignNick'] = $this->foreignNick;
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
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }
        if (isset($map['ForeignKey'])) {
            $model->foreignKey = $map['ForeignKey'];
        }
        if (isset($map['ServicerType'])) {
            $model->servicerType = $map['ServicerType'];
        }
        if (isset($map['RealName'])) {
            $model->realName = $map['RealName'];
        }
        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['ForeignNick'])) {
            $model->foreignNick = $map['ForeignNick'];
        }

        return $model;
    }
}
