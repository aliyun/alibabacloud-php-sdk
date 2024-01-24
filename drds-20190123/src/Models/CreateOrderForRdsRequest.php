<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class CreateOrderForRdsRequest extends Model
{
    /**
     * @description The JSON string that contains the order details. For more information, see [CreateDBInstance](~~26228~~).
     *
     * @example {"key":"value"}
     *
     * @var string
     */
    public $params;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'params'   => 'Params',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrderForRdsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
