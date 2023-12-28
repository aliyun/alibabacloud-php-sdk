<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models;

use AlibabaCloud\Tea\Model;

class GetPriceShrinkRequest extends Model
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
     * @var string
     */
    public $resourceAttributesShrink;
    protected $_name = [
        'regionId'                 => 'regionId',
        'resourceAttributesShrink' => 'resourceAttributes',
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
        if (null !== $this->resourceAttributesShrink) {
            $res['resourceAttributes'] = $this->resourceAttributesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPriceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['resourceAttributes'])) {
            $model->resourceAttributesShrink = $map['resourceAttributes'];
        }

        return $model;
    }
}
