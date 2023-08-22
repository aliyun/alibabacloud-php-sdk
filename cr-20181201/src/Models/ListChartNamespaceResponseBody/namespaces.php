<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListChartNamespaceResponseBody;

use AlibabaCloud\Tea\Model;

class namespaces extends Model
{
    /**
     * @description Indicates whether a repository was automatically created when a chart is pushed to the namespace.
     *
     * @example true
     *
     * @var bool
     */
    public $autoCreateRepo;

    /**
     * @description The default repository type. Valid values:
     *
     *   `PUBLIC`: a public repository
     *   `PRIVATE`: a private repository
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
     * @description The ID of the namespace.
     *
     * @example null
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
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'autoCreateRepo'  => 'AutoCreateRepo',
        'defaultRepoType' => 'DefaultRepoType',
        'instanceId'      => 'InstanceId',
        'namespaceId'     => 'NamespaceId',
        'namespaceName'   => 'NamespaceName',
        'namespaceStatus' => 'NamespaceStatus',
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
        if (null !== $this->defaultRepoType) {
            $res['DefaultRepoType'] = $this->defaultRepoType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return namespaces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoCreateRepo'])) {
            $model->autoCreateRepo = $map['AutoCreateRepo'];
        }
        if (isset($map['DefaultRepoType'])) {
            $model->defaultRepoType = $map['DefaultRepoType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
