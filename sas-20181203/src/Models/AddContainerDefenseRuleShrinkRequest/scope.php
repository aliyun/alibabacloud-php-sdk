<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\AddContainerDefenseRuleShrinkRequest;

use AlibabaCloud\Dara\Model;

class scope extends Model
{
    /**
     * @var int
     */
    public $allNamespace;
    /**
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
        if (\is_array($this->namespaces)) {
            Model::validateArray($this->namespaces);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allNamespace) {
            $res['AllNamespace'] = $this->allNamespace;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->namespaces) {
            if (\is_array($this->namespaces)) {
                $res['Namespaces'] = [];
                $n1                = 0;
                foreach ($this->namespaces as $item1) {
                    $res['Namespaces'][$n1++] = $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->namespaces = [];
                $n1                = 0;
                foreach ($map['Namespaces'] as $item1) {
                    $model->namespaces[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
