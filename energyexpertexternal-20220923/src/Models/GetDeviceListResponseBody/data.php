<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceListResponseBody\data\deviceList;

class data extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var deviceList[]
     */
    public $deviceList;

    /**
     * @var string
     */
    public $factoryId;

    /**
     * @var int
     */
    public $httpCode;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'code',
        'deviceList' => 'deviceList',
        'factoryId' => 'factoryId',
        'httpCode' => 'httpCode',
        'success' => 'success',
    ];

    public function validate()
    {
        if (\is_array($this->deviceList)) {
            Model::validateArray($this->deviceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->deviceList) {
            if (\is_array($this->deviceList)) {
                $res['deviceList'] = [];
                $n1 = 0;
                foreach ($this->deviceList as $item1) {
                    $res['deviceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->factoryId) {
            $res['factoryId'] = $this->factoryId;
        }

        if (null !== $this->httpCode) {
            $res['httpCode'] = $this->httpCode;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['deviceList'])) {
            if (!empty($map['deviceList'])) {
                $model->deviceList = [];
                $n1 = 0;
                foreach ($map['deviceList'] as $item1) {
                    $model->deviceList[$n1] = deviceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['factoryId'])) {
            $model->factoryId = $map['factoryId'];
        }

        if (isset($map['httpCode'])) {
            $model->httpCode = $map['httpCode'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
