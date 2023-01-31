<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeTagHitsSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class tagHitsList extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $hitCount;

    /**
     * @var string
     */
    public $tagGroup;

    /**
     * @var string
     */
    public $tagName;
    protected $_name = [
        'hitCount' => 'HitCount',
        'tagGroup' => 'TagGroup',
        'tagName'  => 'TagName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hitCount) {
            $res['HitCount'] = $this->hitCount;
        }
        if (null !== $this->tagGroup) {
            $res['TagGroup'] = $this->tagGroup;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagHitsList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HitCount'])) {
            $model->hitCount = $map['HitCount'];
        }
        if (isset($map['TagGroup'])) {
            $model->tagGroup = $map['TagGroup'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }

        return $model;
    }
}
