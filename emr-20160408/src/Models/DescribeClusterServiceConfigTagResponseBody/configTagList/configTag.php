<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigTagResponseBody\configTagList;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigTagResponseBody\configTagList\configTag\valueList;
use AlibabaCloud\Tea\Model;

class configTag extends Model
{
    /**
     * @var valueList
     */
    public $valueList;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $tagDesc;
    protected $_name = [
        'valueList' => 'ValueList',
        'tag'       => 'Tag',
        'tagDesc'   => 'TagDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->valueList) {
            $res['ValueList'] = null !== $this->valueList ? $this->valueList->toMap() : null;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->tagDesc) {
            $res['TagDesc'] = $this->tagDesc;
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
        if (isset($map['ValueList'])) {
            $model->valueList = valueList::fromMap($map['ValueList']);
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['TagDesc'])) {
            $model->tagDesc = $map['TagDesc'];
        }

        return $model;
    }
}
