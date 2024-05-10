<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeClientConfStrategyRequest extends Model
{
    /**
     * @description The tag that is added to the server.
     *
     * This parameter is required.
     * @example machineResource
     *
     * @var string
     */
    public $tag;

    /**
     * @description The value of the tag. Valid values:
     *
     *   major
     *   advanced
     *   basic
     *
     * This parameter is required.
     * @example major
     *
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'tag'      => 'Tag',
        'tagValue' => 'TagValue',
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
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClientConfStrategyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        return $model;
    }
}
