<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListCollectionsResponseBody;

use AlibabaCloud\Dara\Model;

class collections extends Model
{
    /**
     * @var string[]
     */
    public $collection;
    protected $_name = [
        'collection' => 'Collection',
    ];

    public function validate()
    {
        if (\is_array($this->collection)) {
            Model::validateArray($this->collection);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collection) {
            if (\is_array($this->collection)) {
                $res['Collection'] = [];
                $n1 = 0;
                foreach ($this->collection as $item1) {
                    $res['Collection'][$n1++] = $item1;
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
        if (isset($map['Collection'])) {
            if (!empty($map['Collection'])) {
                $model->collection = [];
                $n1 = 0;
                foreach ($map['Collection'] as $item1) {
                    $model->collection[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
