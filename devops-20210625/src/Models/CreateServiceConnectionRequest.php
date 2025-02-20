<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class CreateServiceConnectionRequest extends Model
{
    /**
     * @var string
     */
    public $authType;
    /**
     * @var string
     */
    public $connectionName;
    /**
     * @var string
     */
    public $connectionType;
    /**
     * @var string
     */
    public $scope;
    /**
     * @var int
     */
    public $serviceAuthId;
    protected $_name = [
        'authType'       => 'authType',
        'connectionName' => 'connectionName',
        'connectionType' => 'connectionType',
        'scope'          => 'scope',
        'serviceAuthId'  => 'serviceAuthId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authType) {
            $res['authType'] = $this->authType;
        }

        if (null !== $this->connectionName) {
            $res['connectionName'] = $this->connectionName;
        }

        if (null !== $this->connectionType) {
            $res['connectionType'] = $this->connectionType;
        }

        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }

        if (null !== $this->serviceAuthId) {
            $res['serviceAuthId'] = $this->serviceAuthId;
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
        if (isset($map['authType'])) {
            $model->authType = $map['authType'];
        }

        if (isset($map['connectionName'])) {
            $model->connectionName = $map['connectionName'];
        }

        if (isset($map['connectionType'])) {
            $model->connectionType = $map['connectionType'];
        }

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        if (isset($map['serviceAuthId'])) {
            $model->serviceAuthId = $map['serviceAuthId'];
        }

        return $model;
    }
}
