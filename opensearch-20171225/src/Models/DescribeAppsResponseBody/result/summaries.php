<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppsResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppsResponseBody\result\summaries\meta;

class summaries extends Model
{
    /**
     * @var meta[]
     */
    public $meta;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'meta' => 'meta',
        'name' => 'name',
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
                $res['meta'] = [];
                $n1 = 0;
                foreach ($this->meta as $item1) {
                    $res['meta'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['meta'])) {
            if (!empty($map['meta'])) {
                $model->meta = [];
                $n1 = 0;
                foreach ($map['meta'] as $item1) {
                    $model->meta[$n1] = meta::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
