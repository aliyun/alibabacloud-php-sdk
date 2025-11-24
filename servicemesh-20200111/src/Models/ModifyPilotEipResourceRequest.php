<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;

class ModifyPilotEipResourceRequest extends Model
{
    /**
     * @var string
     */
    public $eipId;

    /**
     * @var bool
     */
    public $isCanary;

    /**
     * @var string
     */
    public $operation;

    /**
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'eipId' => 'EipId',
        'isCanary' => 'IsCanary',
        'operation' => 'Operation',
        'serviceMeshId' => 'ServiceMeshId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eipId) {
            $res['EipId'] = $this->eipId;
        }

        if (null !== $this->isCanary) {
            $res['IsCanary'] = $this->isCanary;
        }

        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
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
        if (isset($map['EipId'])) {
            $model->eipId = $map['EipId'];
        }

        if (isset($map['IsCanary'])) {
            $model->isCanary = $map['IsCanary'];
        }

        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
