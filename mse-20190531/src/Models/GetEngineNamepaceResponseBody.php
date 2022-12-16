<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class GetEngineNamepaceResponseBody extends Model
{
    /**
     * @description The number of configurations.
     *
     * @example 1
     *
     * @var string
     */
    public $configCount;

    /**
     * @description The error code returned if the request fails.
     *
     * @example mse-100-000
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The HTTP status code returned.
     *
     * @example 202
     *
     * @var string
     */
    public $httpCode;

    /**
     * @description The message returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The name of the namespace.
     *
     * @example public
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The description of the namespace.
     *
     * @example mytest
     *
     * @var string
     */
    public $namespaceDesc;

    /**
     * @description The display name of the namespace.
     *
     * @example public
     *
     * @var string
     */
    public $namespaceShowName;

    /**
     * @description The quota of configurations.
     *
     * @example 200
     *
     * @var string
     */
    public $quota;

    /**
     * @description The ID of the request.
     *
     * @example FA8F966F-420C-52F5-B49E-6ED7CCE02697
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful. Valid values:
     * - `false`: The request fails.
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The type of the namespace. Valid values:
     *
     * - 2: custom namespace
     * @example 1
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'configCount'       => 'ConfigCount',
        'errorCode'         => 'ErrorCode',
        'httpCode'          => 'HttpCode',
        'message'           => 'Message',
        'namespace'         => 'Namespace',
        'namespaceDesc'     => 'NamespaceDesc',
        'namespaceShowName' => 'NamespaceShowName',
        'quota'             => 'Quota',
        'requestId'         => 'RequestId',
        'success'           => 'Success',
        'type'              => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configCount) {
            $res['ConfigCount'] = $this->configCount;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->httpCode) {
            $res['HttpCode'] = $this->httpCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->namespaceDesc) {
            $res['NamespaceDesc'] = $this->namespaceDesc;
        }
        if (null !== $this->namespaceShowName) {
            $res['NamespaceShowName'] = $this->namespaceShowName;
        }
        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEngineNamepaceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigCount'])) {
            $model->configCount = $map['ConfigCount'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['HttpCode'])) {
            $model->httpCode = $map['HttpCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NamespaceDesc'])) {
            $model->namespaceDesc = $map['NamespaceDesc'];
        }
        if (isset($map['NamespaceShowName'])) {
            $model->namespaceShowName = $map['NamespaceShowName'];
        }
        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
