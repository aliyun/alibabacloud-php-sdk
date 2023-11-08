<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class UpgradeMeshVersionRequest extends Model
{
    /**
     * @description Specifies whether to perform a precheck. Default value: false. If this parameter is set to true, this call only checks whether the current ASM instance meets the upgrade conditions and does not actually perform an upgrade.
     *
     * @example false
     *
     * @var bool
     */
    public $preCheck;

    /**
     * @description The ASM instance ID.
     *
     * @example c08ba3fd1e6484b0f8cc1ad8fe10d****
     *
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'preCheck'      => 'PreCheck',
        'serviceMeshId' => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->preCheck) {
            $res['PreCheck'] = $this->preCheck;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeMeshVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PreCheck'])) {
            $model->preCheck = $map['PreCheck'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
