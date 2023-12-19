<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ModifyGovernanceKubernetesClusterRequest;

use AlibabaCloud\Tea\Model;

class namespaceInfos extends Model
{
    /**
     * @description The microservice namespace.If you do not specify this parameter, Microservice Governance is not enabled for the namespace.
     *
     * @example default
     *
     * @var string
     */
    public $mseNamespace;

    /**
     * @description The name of the Kubernetes namespace.
     *
     * @example default
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'mseNamespace' => 'MseNamespace',
        'name'         => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mseNamespace) {
            $res['MseNamespace'] = $this->mseNamespace;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return namespaceInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MseNamespace'])) {
            $model->mseNamespace = $map['MseNamespace'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
