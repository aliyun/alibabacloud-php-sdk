<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models\CreateTagsRequest;

use AlibabaCloud\SDK\Tag\V20180828\Models\CreateTagsRequest\tagKeyValueParamList\tagValueParamList;
use AlibabaCloud\Tea\Model;

class tagKeyValueParamList extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var tagValueParamList[]
     */
    public $tagValueParamList;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'key'               => 'Key',
        'tagValueParamList' => 'TagValueParamList',
        'description'       => 'Description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->tagValueParamList) {
            $res['TagValueParamList'] = [];
            if (null !== $this->tagValueParamList && \is_array($this->tagValueParamList)) {
                $n = 0;
                foreach ($this->tagValueParamList as $item) {
                    $res['TagValueParamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagKeyValueParamList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['TagValueParamList'])) {
            if (!empty($map['TagValueParamList'])) {
                $model->tagValueParamList = [];
                $n                        = 0;
                foreach ($map['TagValueParamList'] as $item) {
                    $model->tagValueParamList[$n++] = null !== $item ? tagValueParamList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
