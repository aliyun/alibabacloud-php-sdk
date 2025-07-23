<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class AicsOpenApiInvokeRequest extends Model
{
    /**
     * @example 119397
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example {"a":1}
     *
     * @var mixed[]
     */
    public $param;

    /**
     * @description This parameter is required.
     *
     * @example ae5f9884c9914ed7af72b07e6c1616f9
     *
     * @var string
     */
    public $serviceId;

    /**
     * @example EXPERIMENT
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'nodeId' => 'NodeId',
        'param' => 'Param',
        'serviceId' => 'ServiceId',
        'type' => 'Type',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AicsOpenApiInvokeRequest
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
