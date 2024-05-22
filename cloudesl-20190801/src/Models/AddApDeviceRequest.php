<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models;

use AlibabaCloud\Tea\Model;

class AddApDeviceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $apMac;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $storeId;
    protected $_name = [
        'apMac'   => 'ApMac',
        'storeId' => 'StoreId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apMac) {
            $res['ApMac'] = $this->apMac;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddApDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApMac'])) {
            $model->apMac = $map['ApMac'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }

        return $model;
    }
}
