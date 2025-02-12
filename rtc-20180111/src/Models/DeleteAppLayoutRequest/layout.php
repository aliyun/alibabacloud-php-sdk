<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteAppLayoutRequest;

use AlibabaCloud\Dara\Model;

class layout extends Model
{
    /**
     * @var string
     */
    public $layoutId;
    protected $_name = [
        'layoutId' => 'LayoutId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
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
        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }

        return $model;
    }
}
