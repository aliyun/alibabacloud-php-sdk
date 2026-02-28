<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\InvokeDataAPIServiceRequest\param;

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
        'apiSrn' => 'ApiSrn',
        'iotInstanceId' => 'IotInstanceId',
        'param' => 'Param',
    ];

    public function validate()
    {
        if (\is_array($this->param)) {
            Model::validateArray($this->param);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiSrn) {
            $res['ApiSrn'] = $this->apiSrn;
        }

        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        if (null !== $this->param) {
            if (\is_array($this->param)) {
                $res['Param'] = [];
                $n1 = 0;
                foreach ($this->param as $item1) {
                    $res['Param'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Param'] as $item1) {
                    $model->param[$n1] = param::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
