<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PolardbAI\V20251013\Models;

use AlibabaCloud\Dara\Model;

class ChatBIConfigQueryTablesRequest extends Model
{
    /**
     * @var string
     */
    public $authMessage;

    /**
     * @var string
     */
    public $authType;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $inputField;

    /**
     * @var string
     */
    public $instanceName;
    protected $_name = [
        'authMessage' => 'AuthMessage',
        'authType' => 'AuthType',
        'dbName' => 'DbName',
        'inputField' => 'InputField',
        'instanceName' => 'InstanceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authMessage) {
            $res['AuthMessage'] = $this->authMessage;
        }

        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }

        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->inputField) {
            $res['InputField'] = $this->inputField;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
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
        if (isset($map['AuthMessage'])) {
            $model->authMessage = $map['AuthMessage'];
        }

        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }

        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['InputField'])) {
            $model->inputField = $map['InputField'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        return $model;
    }
}
