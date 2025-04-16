<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ListTagResourcesRequest;

use AlibabaCloud\Dara\Model;

class tagFilter extends Model
{
    /**
     * @var string
     */
    public $tagKey;

    /**
     * @var string[]
     */
    public $tagValues;
    protected $_name = [
        'tagKey' => 'TagKey',
        'tagValues' => 'TagValues',
    ];

    public function validate()
    {
        if (\is_array($this->tagValues)) {
            Model::validateArray($this->tagValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }

        if (null !== $this->tagValues) {
            if (\is_array($this->tagValues)) {
                $res['TagValues'] = [];
                $n1 = 0;
                foreach ($this->tagValues as $item1) {
                    $res['TagValues'][$n1++] = $item1;
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
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }

        if (isset($map['TagValues'])) {
            if (!empty($map['TagValues'])) {
                $model->tagValues = [];
                $n1 = 0;
                foreach ($map['TagValues'] as $item1) {
                    $model->tagValues[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
