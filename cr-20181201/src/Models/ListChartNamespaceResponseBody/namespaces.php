<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListChartNamespaceResponseBody;

use AlibabaCloud\Tea\Model;

class namespaces extends Model
{
    /**
     * @var string
     */
    public $defaultRepoType;

    /**
     * @var string
     */
    public $namespaceStatus;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var bool
     */
    public $autoCreateRepo;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $namespaceName;
    protected $_name = [
        'defaultRepoType' => 'DefaultRepoType',
        'namespaceStatus' => 'NamespaceStatus',
        'namespaceId'     => 'NamespaceId',
        'autoCreateRepo'  => 'AutoCreateRepo',
        'instanceId'      => 'InstanceId',
        'namespaceName'   => 'NamespaceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultRepoType) {
            $res['DefaultRepoType'] = $this->defaultRepoType;
        }
        if (null !== $this->namespaceStatus) {
            $res['NamespaceStatus'] = $this->namespaceStatus;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->autoCreateRepo) {
            $res['AutoCreateRepo'] = $this->autoCreateRepo;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
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
        if (isset($map['DefaultRepoType'])) {
            $model->defaultRepoType = $map['DefaultRepoType'];
        }
        if (isset($map['NamespaceStatus'])) {
            $model->namespaceStatus = $map['NamespaceStatus'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['AutoCreateRepo'])) {
            $model->autoCreateRepo = $map['AutoCreateRepo'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }

        return $model;
    }
}
