<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models\CreateTagsRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tag\V20180828\Models\CreateTagsRequest\tagKeyValueParamList\tagValueParamList;

class tagKeyValueParamList extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $key;

    /**
     * @var tagValueParamList[]
     */
    public $tagValueParamList;
    protected $_name = [
        'description' => 'Description',
        'key' => 'Key',
        'tagValueParamList' => 'TagValueParamList',
    ];

    public function validate()
    {
        if (\is_array($this->tagValueParamList)) {
            Model::validateArray($this->tagValueParamList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->tagValueParamList) {
            if (\is_array($this->tagValueParamList)) {
                $res['TagValueParamList'] = [];
                $n1 = 0;
                foreach ($this->tagValueParamList as $item1) {
                    $res['TagValueParamList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['TagValueParamList'])) {
            if (!empty($map['TagValueParamList'])) {
                $model->tagValueParamList = [];
                $n1 = 0;
                foreach ($map['TagValueParamList'] as $item1) {
                    $model->tagValueParamList[$n1] = tagValueParamList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
