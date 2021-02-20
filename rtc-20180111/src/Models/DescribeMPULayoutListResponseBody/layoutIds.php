<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeMPULayoutListResponseBody;

use AlibabaCloud\Tea\Model;

class layoutIds extends Model
{
    /**
     * @var string[]
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
     * @return layoutIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LayoutId'])) {
            if (!empty($map['LayoutId'])) {
                $model->layoutId = $map['LayoutId'];
            }
        }

        return $model;
    }
}
