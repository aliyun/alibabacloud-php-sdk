<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTagsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTagsResponseBody\items\tagInfos;

class items extends Model
{
    /**
     * @var tagInfos[]
     */
    public $tagInfos;
    protected $_name = [
        'tagInfos' => 'TagInfos',
    ];

    public function validate()
    {
        if (\is_array($this->tagInfos)) {
            Model::validateArray($this->tagInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagInfos) {
            if (\is_array($this->tagInfos)) {
                $res['TagInfos'] = [];
                $n1              = 0;
                foreach ($this->tagInfos as $item1) {
                    $res['TagInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TagInfos'])) {
            if (!empty($map['TagInfos'])) {
                $model->tagInfos = [];
                $n1              = 0;
                foreach ($map['TagInfos'] as $item1) {
                    $model->tagInfos[$n1++] = tagInfos::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
