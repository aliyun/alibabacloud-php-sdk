<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class FlightOtaItemDetailRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example cheshi
     *
     * @var string
     */
    public $isvName;

    /**
     * @description This parameter is required.
     *
     * @example 68cdc6b37c87484c98b479b49306ffbb_0
     *
     * @var string
     */
    public $otaItemId;
    protected $_name = [
        'isvName'   => 'isv_name',
        'otaItemId' => 'ota_item_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isvName) {
            $res['isv_name'] = $this->isvName;
        }
        if (null !== $this->otaItemId) {
            $res['ota_item_id'] = $this->otaItemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FlightOtaItemDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['isv_name'])) {
            $model->isvName = $map['isv_name'];
        }
        if (isset($map['ota_item_id'])) {
            $model->otaItemId = $map['ota_item_id'];
        }

        return $model;
    }
}
