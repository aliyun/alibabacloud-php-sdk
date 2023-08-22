<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListNamespaceResponseBody;

use AlibabaCloud\Tea\Model;

class namespaces extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoCreateRepo;

    /**
     * @example PUBLIC
     *
     * @var string
     */
    public $defaultRepoType;

    /**
     * @example cri-94klsruryslx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example crn-tiw8t3f8i5lt****
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @example test
     *
     * @var string
     */
    public $namespaceName;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $namespaceStatus;

    /**
     * @example rg-acfm4n5kzyf2fbi
     *
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
