<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\components;

use AlibabaCloud\Tea\Model;

class componentConfig extends Model
{
    /**
     * @example {
     * }
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basicArgs) {
            $res['BasicArgs'] = $this->basicArgs;
        }
        if (null !== $this->nodeUnits) {
            $res['NodeUnits'] = $this->nodeUnits;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return componentConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BasicArgs'])) {
            $model->basicArgs = $map['BasicArgs'];
        }
        if (isset($map['NodeUnits'])) {
            if (!empty($map['NodeUnits'])) {
                $model->nodeUnits = $map['NodeUnits'];
            }
        }

        return $model;
    }
}
