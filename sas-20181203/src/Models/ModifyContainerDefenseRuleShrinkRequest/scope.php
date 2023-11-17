<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ModifyContainerDefenseRuleShrinkRequest;

use AlibabaCloud\Tea\Model;

class scope extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $allNamespace;

    /**
     * @example c54b***1501
     *
     * @var string
     */
    public $clusterId;

    /**
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
