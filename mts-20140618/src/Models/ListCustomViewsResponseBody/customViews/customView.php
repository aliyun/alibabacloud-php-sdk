<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomViewsResponseBody\customViews;

use AlibabaCloud\Dara\Model;

class customView extends Model
{
    /**
     * @var string
     */
    public $customViewId;

    /**
     * @var string
     */
    public $imageUrl;
    protected $_name = [
        'customViewId' => 'CustomViewId',
        'imageUrl' => 'ImageUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customViewId) {
            $res['CustomViewId'] = $this->customViewId;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
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
        if (isset($map['CustomViewId'])) {
            $model->customViewId = $map['CustomViewId'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        return $model;
    }
}
