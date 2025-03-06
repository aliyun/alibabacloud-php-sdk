<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateBackendModelRequest extends Model
{
    /**
     * @example 34e94fcd3e2e47a49824a89b8f92cb5e
     *
     * @var string
     */
    public $backendId;

    /**
     * @example {\\"ServiceAddress\\":\\"http://apigateway-echo-redux.alicloudapi.com:8080\\"}
     *
     * @var string
     */
    public $backendModelData;

    /**
     * @example HTTP
     *
     * @var string
     */
    public $backendType;

    /**
     * @example model description
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example TEST
     *
     * @var string
     */
    public $stageName;
    protected $_name = [
        'backendId'        => 'BackendId',
        'backendModelData' => 'BackendModelData',
        'backendType'      => 'BackendType',
        'description'      => 'Description',
        'securityToken'    => 'SecurityToken',
        'stageName'        => 'StageName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendId) {
            $res['BackendId'] = $this->backendId;
        }
        if (null !== $this->backendModelData) {
            $res['BackendModelData'] = $this->backendModelData;
        }
        if (null !== $this->backendType) {
            $res['BackendType'] = $this->backendType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBackendModelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendId'])) {
            $model->backendId = $map['BackendId'];
        }
        if (isset($map['BackendModelData'])) {
            $model->backendModelData = $map['BackendModelData'];
        }
        if (isset($map['BackendType'])) {
            $model->backendType = $map['BackendType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        return $model;
    }
}
