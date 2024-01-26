<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Status\V20200117\Models;

use AlibabaCloud\Tea\Model;

class ListEventInProgressShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $regionIdsShrink;
    protected $_name = [
        'regionIdsShrink' => 'RegionIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionIdsShrink) {
            $res['RegionIds'] = $this->regionIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEventInProgressShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionIds'])) {
            $model->regionIdsShrink = $map['RegionIds'];
        }

        return $model;
    }
}
