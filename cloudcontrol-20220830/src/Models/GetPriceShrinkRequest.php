<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models;

use AlibabaCloud\Dara\Model;

class GetPriceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceAttributesShrink;
    protected $_name = [
        'regionId' => 'regionId',
        'resourceAttributesShrink' => 'resourceAttributes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
