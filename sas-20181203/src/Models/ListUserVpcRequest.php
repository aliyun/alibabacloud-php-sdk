<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListUserVpcRequest extends Model
{
    /**
     * @description Region.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $k8sRegionId;
    protected $_name = [
        'k8sRegionId' => 'K8sRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->k8sRegionId) {
            $res['K8sRegionId'] = $this->k8sRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserVpcRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['K8sRegionId'])) {
            $model->k8sRegionId = $map['K8sRegionId'];
        }

        return $model;
    }
}
