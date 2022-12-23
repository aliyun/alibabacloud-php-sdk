<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponseBody\videoTagResult;

use AlibabaCloud\Tea\Model;

class keyword extends Model
{
    /**
     * @description The tag string.
     *
     * @example Cushion
     *
     * @var string
     */
    public $tag;

    /**
     * @description The points in time when the tags are displayed. Unit: milliseconds.
     *
     * @var string[]
     */
    public $times;
    protected $_name = [
        'tag'   => 'Tag',
        'times' => 'Times',
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
        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keyword
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Times'])) {
            if (!empty($map['Times'])) {
                $model->times = $map['Times'];
            }
        }

        return $model;
    }
}
