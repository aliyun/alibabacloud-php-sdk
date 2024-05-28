<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceConnectionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example CREDENTIAL
     *
     * @var string
     */
    public $authType;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $connectionName;

    /**
     * @description This parameter is required.
     *
     * @example ecs
     *
     * @var string
     */
    public $connectionType;

    /**
     * @description This parameter is required.
     *
     * @example PERSON
     *
     * @var string
     */
    public $scope;

    /**
     * @description This parameter is required.
     *
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
