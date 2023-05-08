<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class ModifyServiceMeshNameRequest extends Model
{
    /**
     * @description The new name of the ASM instance.
     *
     * @example test-mesh
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the ASM instance.
     *
     * @example cdd30a90a7cea480ebcc7ff****
     *
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'name'          => 'Name',
        'serviceMeshId' => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyServiceMeshNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
