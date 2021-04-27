<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\InvokeDataAPIServiceRequest\param;
use AlibabaCloud\Tea\Model;

class InvokeDataAPIServiceRequest extends Model
{
    /**
     * @var string
     */
    public $apiSrn;

    /**
     * @var param[]
     */
    public $param;

    /**
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'apiSrn'        => 'ApiSrn',
        'param'         => 'Param',
        'iotInstanceId' => 'IotInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiSrn) {
            $res['ApiSrn'] = $this->apiSrn;
        }
        if (null !== $this->param) {
            $res['Param'] = [];
            if (null !== $this->param && \is_array($this->param)) {
                $n = 0;
                foreach ($this->param as $item) {
                    $res['Param'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InvokeDataAPIServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiSrn'])) {
            $model->apiSrn = $map['ApiSrn'];
        }
        if (isset($map['Param'])) {
            if (!empty($map['Param'])) {
                $model->param = [];
                $n            = 0;
                foreach ($map['Param'] as $item) {
                    $model->param[$n++] = null !== $item ? param::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
