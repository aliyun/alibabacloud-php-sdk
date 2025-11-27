<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMetaListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMetaListResponseBody\items\meta;

class items extends Model
{
    /**
     * @var meta[]
     */
    public $meta;
    protected $_name = [
        'meta' => 'Meta',
    ];

    public function validate()
    {
        if (\is_array($this->meta)) {
            Model::validateArray($this->meta);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->meta) {
            if (\is_array($this->meta)) {
                $res['Meta'] = [];
                $n1 = 0;
                foreach ($this->meta as $item1) {
                    $res['Meta'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Meta'])) {
            if (!empty($map['Meta'])) {
                $model->meta = [];
                $n1 = 0;
                foreach ($map['Meta'] as $item1) {
                    $model->meta[$n1] = meta::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
