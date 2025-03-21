<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class OpenApiInvokeRequest extends Model
{
    /**
     * @example 119397
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example {"a":{"value":1}}
     *
     * @var string
     */
    public $param;

    /**
     * @example 215168378e7b43789cabeef1d0db9320
     *
     * @var string
     */
    public $serviceId;
    protected $_name = [
        'nodeId' => 'NodeId',
        'param' => 'Param',
        'serviceId' => 'ServiceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->param) {
            $res['Param'] = $this->param;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OpenApiInvokeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Param'])) {
            $model->param = $map['Param'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        return $model;
    }
}
