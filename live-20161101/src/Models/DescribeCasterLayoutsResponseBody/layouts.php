<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponseBody\layouts\layout;

class layouts extends Model
{
    /**
     * @var layout[]
     */
    public $layout;
    protected $_name = [
        'layout' => 'Layout',
    ];

    public function validate()
    {
        if (\is_array($this->layout)) {
            Model::validateArray($this->layout);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->layout) {
            if (\is_array($this->layout)) {
                $res['Layout'] = [];
                $n1 = 0;
                foreach ($this->layout as $item1) {
                    $res['Layout'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['Layout'])) {
            if (!empty($map['Layout'])) {
                $model->layout = [];
                $n1 = 0;
                foreach ($map['Layout'] as $item1) {
                    $model->layout[$n1] = layout::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
