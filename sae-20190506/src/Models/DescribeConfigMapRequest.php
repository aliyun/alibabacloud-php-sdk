<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DescribeConfigMapRequest extends Model
{
    /**
     * @description The ID of the ConfigMap whose details you want to query. You can call the [ListNamespacedConfigMaps](https://help.aliyun.com/document_detail/176917.html) operation to obtain the ID of a ConfigMap.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $configMapId;
    protected $_name = [
        'configMapId' => 'ConfigMapId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configMapId) {
            $res['ConfigMapId'] = $this->configMapId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConfigMapRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigMapId'])) {
            $model->configMapId = $map['ConfigMapId'];
        }

        return $model;
    }
}
