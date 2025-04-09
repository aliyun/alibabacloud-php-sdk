<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeTagHitsSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class tagHitsList extends Model
{
    /**
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
        'tagName' => 'TagName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
