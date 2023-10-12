<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGovernanceKubernetesClusterResponseBody\data;

use AlibabaCloud\Tea\Model;

class namespaces extends Model
{
    /**
     * @description The name of the MSE namespace that you want to access.
     *
     * @example default
     *
     * @var string
     */
    public $mseNamespace;

    /**
     * @description The name of the namespace in the ACK cluster.
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
     * @return namespaces
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
