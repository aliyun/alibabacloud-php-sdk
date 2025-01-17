<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourceDriftsResponseBody\resourceDrifts;

use AlibabaCloud\Dara\Model;

class moduleInfo extends Model
{
    /**
     * @var string
     */
    public $logicalIdHierarchy;
    /**
     * @var string
     */
    public $typeHierarchy;
    protected $_name = [
        'logicalIdHierarchy' => 'LogicalIdHierarchy',
        'typeHierarchy'      => 'TypeHierarchy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logicalIdHierarchy) {
            $res['LogicalIdHierarchy'] = $this->logicalIdHierarchy;
        }

        if (null !== $this->typeHierarchy) {
            $res['TypeHierarchy'] = $this->typeHierarchy;
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
        if (isset($map['LogicalIdHierarchy'])) {
            $model->logicalIdHierarchy = $map['LogicalIdHierarchy'];
        }

        if (isset($map['TypeHierarchy'])) {
            $model->typeHierarchy = $map['TypeHierarchy'];
        }

        return $model;
    }
}
