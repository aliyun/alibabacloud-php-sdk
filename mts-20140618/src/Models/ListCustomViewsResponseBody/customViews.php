<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomViewsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomViewsResponseBody\customViews\customView;

class customViews extends Model
{
    /**
     * @var customView[]
     */
    public $customView;
    protected $_name = [
        'customView' => 'CustomView',
    ];

    public function validate()
    {
        if (\is_array($this->customView)) {
            Model::validateArray($this->customView);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customView) {
            if (\is_array($this->customView)) {
                $res['CustomView'] = [];
                $n1 = 0;
                foreach ($this->customView as $item1) {
                    $res['CustomView'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['CustomView'])) {
            if (!empty($map['CustomView'])) {
                $model->customView = [];
                $n1 = 0;
                foreach ($map['CustomView'] as $item1) {
                    $model->customView[$n1++] = customView::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
