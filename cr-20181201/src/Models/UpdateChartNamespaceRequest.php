<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class UpdateChartNamespaceRequest extends Model
{
    /**
     * @description Specifies whether to automatically create repositories in the namespace. Valid values:
     *
     *   `true`: automatically creates repositories in the namespace.
     *   `false`: does not automatically create repositories in the namespace.
     *
     * @example true
     *
     * @var bool
     */
    public $autoCreateRepo;

    /**
     * @description The default type of the repository. Valid values:
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
     * @description The name of the namespace to which the repository belongs.
     *
     * @example test
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
     * @return UpdateChartNamespaceRequest
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
