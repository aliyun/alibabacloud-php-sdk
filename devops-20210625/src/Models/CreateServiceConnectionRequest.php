<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceConnectionRequest extends Model
{
    /**
     * @example CREDENTIAL
     *
     * @var string
     */
    public $authType;

    /**
     * @var string
     */
    public $connectionName;

    /**
     * @example ecs
     *
     * @var string
     */
    public $connectionType;

    /**
     * @example PERSON
     *
     * @var string
     */
    public $scope;

    /**
     * @example 111
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateServiceConnectionRequest
     */
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
