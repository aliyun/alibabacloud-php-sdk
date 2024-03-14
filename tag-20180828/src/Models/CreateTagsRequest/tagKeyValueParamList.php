<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models\CreateTagsRequest;

use AlibabaCloud\SDK\Tag\V20180828\Models\CreateTagsRequest\tagKeyValueParamList\tagValueParamList;
use AlibabaCloud\Tea\Model;

class tagKeyValueParamList extends Model
{
    /**
     * @description The description of the key for tag N.
     *
     * Valid values of N: 1 to 10.
     * @example Business environment
     *
     * @var string
     */
    public $description;

    /**
     * @description The key of tag N.
     *
     * Valid values of N: 1 to 10.
     * @example Environment
     *
     * @var string
     */
    public $key;

    /**
     * @description The information about the tag value.
     *
     * @var tagValueParamList[]
     */
    public $tagValueParamList;
    protected $_name = [
        'description'       => 'Description',
        'key'               => 'Key',
        'tagValueParamList' => 'TagValueParamList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
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

        return $model;
    }
}
