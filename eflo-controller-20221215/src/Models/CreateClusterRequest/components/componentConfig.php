<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\components;

use AlibabaCloud\Dara\Model;

class componentConfig extends Model
{
    /**
     * @var mixed
     */
    public $basicArgs;

    /**
     * @var mixed[]
     */
    public $nodeUnits;
    protected $_name = [
        'basicArgs' => 'BasicArgs',
        'nodeUnits' => 'NodeUnits',
    ];

    public function validate()
    {
        if (\is_array($this->nodeUnits)) {
            Model::validateArray($this->nodeUnits);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->basicArgs) {
            $res['BasicArgs'] = $this->basicArgs;
        }

        if (null !== $this->nodeUnits) {
            if (\is_array($this->nodeUnits)) {
                $res['NodeUnits'] = [];
                $n1 = 0;
                foreach ($this->nodeUnits as $item1) {
                    $res['NodeUnits'][$n1++] = $item1;
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
        if (isset($map['BasicArgs'])) {
            $model->basicArgs = $map['BasicArgs'];
        }

        if (isset($map['NodeUnits'])) {
            if (!empty($map['NodeUnits'])) {
                $model->nodeUnits = [];
                $n1 = 0;
                foreach ($map['NodeUnits'] as $item1) {
                    $model->nodeUnits[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
