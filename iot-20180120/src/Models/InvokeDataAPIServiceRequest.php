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
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var param[]
     */
    public $param;
    protected $_name = [
        'apiSrn'        => 'ApiSrn',
        'iotInstanceId' => 'IotInstanceId',
        'param'         => 'Param',
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
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
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
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
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

        return $model;
    }
}
