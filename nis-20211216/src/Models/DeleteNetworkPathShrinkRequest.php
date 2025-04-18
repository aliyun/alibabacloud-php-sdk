<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;

class DeleteNetworkPathShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $networkPathIdsShrink;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'networkPathIdsShrink' => 'NetworkPathIds',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkPathIdsShrink) {
            $res['NetworkPathIds'] = $this->networkPathIdsShrink;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['NetworkPathIds'])) {
            $model->networkPathIdsShrink = $map['NetworkPathIds'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
