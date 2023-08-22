<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class CreateChartNamespaceRequest extends Model
{
    /**
     * @description Specifies whether to automatically create repositories in the namespace. Valid values:
     *
     * \-`  false `: does not automatically create repositories in the namespace.
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
     * @example cri-xkx6vujuhay0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the namespace.
     *
     * @example namespace01
     *
     * @var string
     */
    public $namespaceName;
    protected $_name = [
        'autoCreateRepo'  => 'AutoCreateRepo',
        'defaultRepoType' => 'DefaultRepoType',
        'instanceId'      => 'InstanceId',
        'namespaceName'   => 'NamespaceName',
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
        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateChartNamespaceRequest
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
        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }

        return $model;
    }
}
