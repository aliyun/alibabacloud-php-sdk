<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class ModifyApiServerEipResourceRequest extends Model
{
    /**
     * @description The ID of the EIP.
     *
     * @example eip-bp1adu9jegmxnaoq****
     *
     * @var string
     */
    public $apiServerEipId;

    /**
     * @description The type of the operation. Valid values:
     *
     *   `UnBindEip`: disassociates an EIP from the API server.
     *   `BindEip`: associates an EIP with the API server.
     *
     * @example BindEip
     *
     * @var string
     */
    public $operation;

    /**
     * @description The ID of the Alibaba Cloud Service Mesh (ASM) instance.
     *
     * @example cb8963379255149cb98c8686f274x****
     *
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'apiServerEipId' => 'ApiServerEipId',
        'operation'      => 'Operation',
        'serviceMeshId'  => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiServerEipId) {
            $res['ApiServerEipId'] = $this->apiServerEipId;
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyApiServerEipResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiServerEipId'])) {
            $model->apiServerEipId = $map['ApiServerEipId'];
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
