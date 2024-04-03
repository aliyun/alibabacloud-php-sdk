<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceListResponseBody;

use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceListResponseBody\data\deviceList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The code returned for the request.
     *
     * @example Success
     *
     * @var string
     */
    public $code;

    /**
     * @description The devices.
     *
     * @var deviceList[]
     */
    public $deviceList;

    /**
     * @description The ID of the site.
     *
     * @example pn_95
     *
     * @var string
     */
    public $factoryId;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var int
     */
    public $httpCode;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'       => 'code',
        'deviceList' => 'deviceList',
        'factoryId'  => 'factoryId',
        'httpCode'   => 'httpCode',
        'success'    => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->deviceList) {
            $res['deviceList'] = [];
            if (null !== $this->deviceList && \is_array($this->deviceList)) {
                $n = 0;
                foreach ($this->deviceList as $item) {
                    $res['deviceList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['deviceList'])) {
            if (!empty($map['deviceList'])) {
                $model->deviceList = [];
                $n                 = 0;
                foreach ($map['deviceList'] as $item) {
                    $model->deviceList[$n++] = null !== $item ? deviceList::fromMap($item) : $item;
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
