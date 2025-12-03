<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeTagsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeTagsResponseBody\tagSets\tagSet;

class tagSets extends Model
{
    /**
     * @var tagSet[]
     */
    public $tagSet;
    protected $_name = [
        'tagSet' => 'TagSet',
    ];

    public function validate()
    {
        if (\is_array($this->tagSet)) {
            Model::validateArray($this->tagSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagSet) {
            if (\is_array($this->tagSet)) {
                $res['TagSet'] = [];
                $n1 = 0;
                foreach ($this->tagSet as $item1) {
                    $res['TagSet'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TagSet'])) {
            if (!empty($map['TagSet'])) {
                $model->tagSet = [];
                $n1 = 0;
                foreach ($map['TagSet'] as $item1) {
                    $model->tagSet[$n1] = tagSet::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
