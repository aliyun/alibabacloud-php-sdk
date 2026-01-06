<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PolardbAI\V20251013\Models;

use AlibabaCloud\Dara\Model;

class ChatBIFileTemplateDownloadRequest extends Model
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
    public $instanceName;

    /**
     * @var string
     */
    public $tableType;
    protected $_name = [
        'authMessage' => 'AuthMessage',
        'authType' => 'AuthType',
        'instanceName' => 'InstanceName',
        'tableType' => 'TableType',
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

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->tableType) {
            $res['TableType'] = $this->tableType;
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

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['TableType'])) {
            $model->tableType = $map['TableType'];
        }

        return $model;
    }
}
