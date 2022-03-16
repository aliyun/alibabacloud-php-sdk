<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeServiceMeshAdditionalStatusRequest extends Model
{
    /**
     * @var string
     */
    public $checkMode;

    /**
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
