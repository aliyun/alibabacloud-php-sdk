<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetNamespaceResponseBody extends Model
{
    /**
     * @description Indicates whether a repository is automatically created when an image is pushed to the namespace.
     *
     * @example true
     *
     * @var bool
     */
    public $autoCreateRepo;

    /**
     * @description The return value.
     *
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @description The default type of the repository. Valid values:
     *
     *   PUBLIC: The repository is a public repository.
     *   PRIVATE: The repository is a private repository.
     *
     * @example PUBLIC
     *
     * @var string
     */
    public $defaultRepoType;

    /**
     * @description The ID of the instance.
     *
     * @example cri-kmsiwlxxdcva****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @description The ID of the namespace.
     *
     * @example crn-tiw8t3f8i5lt****
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The name of the namespace.
     *
     * @example test
     *
     * @var string
     */
    public $namespaceName;

    /**
     * @description The status of the namespace.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $namespaceStatus;

    /**
     * @description The ID of the request.
     *
     * @example E4BC9E21-8AA5-4582-83C1-C1209AB8196F
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'autoCreateRepo'  => 'AutoCreateRepo',
        'code'            => 'Code',
        'defaultRepoType' => 'DefaultRepoType',
        'instanceId'      => 'InstanceId',
        'isSuccess'       => 'IsSuccess',
        'namespaceId'     => 'NamespaceId',
        'namespaceName'   => 'NamespaceName',
        'namespaceStatus' => 'NamespaceStatus',
        'requestId'       => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoCreateRepo) {
            $res['AutoCreateRepo'] = $this->autoCreateRepo;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->defaultRepoType) {
            $res['DefaultRepoType'] = $this->defaultRepoType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
        }
        if (null !== $this->namespaceStatus) {
            $res['NamespaceStatus'] = $this->namespaceStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNamespaceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoCreateRepo'])) {
            $model->autoCreateRepo = $map['AutoCreateRepo'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DefaultRepoType'])) {
            $model->defaultRepoType = $map['DefaultRepoType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }
        if (isset($map['NamespaceStatus'])) {
            $model->namespaceStatus = $map['NamespaceStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
