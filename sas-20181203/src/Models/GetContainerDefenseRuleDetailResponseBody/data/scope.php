<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetContainerDefenseRuleDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class scope extends Model
{
    /**
     * @description Indicates whether all namespaces are included. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 1
     *
     * @var int
     */
    public $allNamespace;

    /**
     * @description The ID of the container cluster.
     *
     * @example c9bea04*2b25**
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description An array that consists of queried namespaces.
     *
     * @var string[]
     */
    public $namespaces;
    protected $_name = [
        'allNamespace' => 'AllNamespace',
        'clusterId'    => 'ClusterId',
        'namespaces'   => 'Namespaces',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allNamespace) {
            $res['AllNamespace'] = $this->allNamespace;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->namespaces) {
            $res['Namespaces'] = $this->namespaces;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scope
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllNamespace'])) {
            $model->allNamespace = $map['AllNamespace'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Namespaces'])) {
            if (!empty($map['Namespaces'])) {
                $model->namespaces = $map['Namespaces'];
            }
        }

        return $model;
    }
}
