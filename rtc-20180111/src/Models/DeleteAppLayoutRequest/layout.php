<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteAppLayoutRequest;

use AlibabaCloud\Tea\Model;

class layout extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 167466539798442****
     *
     * @var string
     */
    public $layoutId;
    protected $_name = [
        'layoutId' => 'LayoutId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return layout
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }

        return $model;
    }
}
