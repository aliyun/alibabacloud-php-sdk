<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PolardbAI\V20251013\Models;

use AlibabaCloud\Dara\Model;

class ChatBIPatternQueryTablesRequest extends Model
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

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'authMessage' => 'AuthMessage',
        'authType' => 'AuthType',
        'dbName' => 'DbName',
        'inputField' => 'InputField',
        'instanceName' => 'InstanceName',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
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

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
