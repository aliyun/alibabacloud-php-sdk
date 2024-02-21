<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigTagResponseBody\configTagList;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigTagResponseBody\configTagList\configTag\valueList;
use AlibabaCloud\Tea\Model;

class configTag extends Model
{
    /**
     * @example PROPERTY_TYPE
     *
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $tagDesc;

    /**
     * @var valueList
     */
    public $valueList;
    protected $_name = [
        'tag'       => 'Tag',
        'tagDesc'   => 'TagDesc',
        'valueList' => 'ValueList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->tagDesc) {
            $res['TagDesc'] = $this->tagDesc;
        }
        if (null !== $this->valueList) {
            $res['ValueList'] = null !== $this->valueList ? $this->valueList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configTag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['TagDesc'])) {
            $model->tagDesc = $map['TagDesc'];
        }
        if (isset($map['ValueList'])) {
            $model->valueList = valueList::fromMap($map['ValueList']);
        }

        return $model;
    }
}
