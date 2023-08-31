<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class UpdateControlPlaneLogConfigRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $enabled;

    /**
     * @example 30
     *
     * @var int
     */
    public $logTTLInDay;

    /**
     * @example aia-asm-deva-sh
     *
     * @var string
     */
    public $project;

    /**
     * @example c20667db760fe4ee6910220136624****
     *
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'enabled'       => 'Enabled',
        'logTTLInDay'   => 'LogTTLInDay',
        'project'       => 'Project',
        'serviceMeshId' => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->logTTLInDay) {
            $res['LogTTLInDay'] = $this->logTTLInDay;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateControlPlaneLogConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['LogTTLInDay'])) {
            $model->logTTLInDay = $map['LogTTLInDay'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
