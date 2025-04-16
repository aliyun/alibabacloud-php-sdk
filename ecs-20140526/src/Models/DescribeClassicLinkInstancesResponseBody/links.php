<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeClassicLinkInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeClassicLinkInstancesResponseBody\links\link;

class links extends Model
{
    /**
     * @var link[]
     */
    public $link;
    protected $_name = [
        'link' => 'Link',
    ];

    public function validate()
    {
        if (\is_array($this->link)) {
            Model::validateArray($this->link);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->link) {
            if (\is_array($this->link)) {
                $res['Link'] = [];
                $n1 = 0;
                foreach ($this->link as $item1) {
                    $res['Link'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Link'])) {
            if (!empty($map['Link'])) {
                $model->link = [];
                $n1 = 0;
                foreach ($map['Link'] as $item1) {
                    $model->link[$n1++] = link::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
