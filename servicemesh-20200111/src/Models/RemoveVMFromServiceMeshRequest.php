<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class RemoveVMFromServiceMeshRequest extends Model
{
    /**
     * @description The ID of the VM.
     *
     * @example i-2ze90ts4edj3650****
     *
     * @var string
     */
    public $ecsId;

    /**
     * @description The ID of the ASM instance.
     *
     * @example ccb37ff104caf419fbf48fb38e6f3****
     *
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'ecsId'         => 'EcsId',
        'serviceMeshId' => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsId) {
            $res['EcsId'] = $this->ecsId;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveVMFromServiceMeshRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsId'])) {
            $model->ecsId = $map['EcsId'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
