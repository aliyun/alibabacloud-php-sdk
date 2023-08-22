<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetChartNamespaceResponseBody extends Model
{
    /**
     * @description Indicates whether a repository was automatically created in the namespace. Valid values:
     *
     *   `true`: A repository was automatically created in the namespace.
     *   `false`: No repository was automatically created in the namespace.
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
     * @description The default repository type. Valid values:
     *
     *   `PUBLIC`: a public repository.
     *   `PRIVATE`: a private repository.
     *
     * @example PRIVATE
     *
     * @var string
     */
    public $defaultRepoType;

    /**
     * @description The ID of the instance.
     *
     * @example cri-xkx6vujuhay0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   `true`: The request is successful.
     *   `false`: The request fails.
     *
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @description The ID of the namespace.
     *
     * @example crcn-43dhbjbyt2xl****
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The name of the namespace.
     *
     * @example ns1
     *
     * @var string
     */
    public $namespaceName;

    /**
     * @description The status of the namespace. Valid values:
     *
     *   `NORMAL`: The namespace is normal.
     *   `DELETING`: The namespace is being deleted.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $namespaceStatus;

    /**
     * @description The ID of the request.
     *
     * @example CD71CF13-93AA-4805-848B-69B2DD543A9A
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
     * @return GetChartNamespaceResponseBody
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
