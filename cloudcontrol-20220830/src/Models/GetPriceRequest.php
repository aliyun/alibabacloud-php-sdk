<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models;

use AlibabaCloud\Tea\Model;

class GetPriceRequest extends Model
{
    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @example {
     * }
     * @var mixed[]
     */
    public $resourceAttributes;
    protected $_name = [
        'regionId'           => 'regionId',
        'resourceAttributes' => 'resourceAttributes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->resourceAttributes) {
            $res['resourceAttributes'] = $this->resourceAttributes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['resourceAttributes'])) {
            $model->resourceAttributes = $map['resourceAttributes'];
        }

        return $model;
    }
}
