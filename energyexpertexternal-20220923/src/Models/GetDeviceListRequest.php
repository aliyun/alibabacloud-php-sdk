<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Tea\Model;

class GetDeviceListRequest extends Model
{
    /**
     * @example pn_95
     *
     * @var string
     */
    public $factoryId;
    protected $_name = [
        'factoryId' => 'factoryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->factoryId) {
            $res['factoryId'] = $this->factoryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeviceListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['factoryId'])) {
            $model->factoryId = $map['factoryId'];
        }

        return $model;
    }
}
