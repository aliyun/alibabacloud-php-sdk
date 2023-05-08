<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeServiceMeshAdditionalStatusRequest extends Model
{
    /**
     * @description The check result of the SLB instance. Valid values:
     *
     *   `exist`: The SLB instance exists.
     *   `not_exist`: The SLB instance does not exist.
     *   `conflict`: Conflicts are detected.
     *   `failed`: The check fails.
     *   `time_out`: The check times out.
     *
     * @example full
     *
     * @var string
     */
    public $checkMode;

    /**
     * @description The check results of the SLB instances created for exposing the API server.
     *
     * @example ca04bc38979214bf2882be79d39b4****
     *
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'checkMode'     => 'CheckMode',
        'serviceMeshId' => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkMode) {
            $res['CheckMode'] = $this->checkMode;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceMeshAdditionalStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckMode'])) {
            $model->checkMode = $map['CheckMode'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
