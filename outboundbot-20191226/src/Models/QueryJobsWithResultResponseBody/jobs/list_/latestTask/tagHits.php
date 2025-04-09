<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsWithResultResponseBody\jobs\list_\latestTask;

use AlibabaCloud\Dara\Model;

class tagHits extends Model
{
    /**
     * @var string
     */
    public $tagGroup;

    /**
     * @var string
     */
    public $tagName;
    protected $_name = [
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
        if (isset($map['TagGroup'])) {
            $model->tagGroup = $map['TagGroup'];
        }

        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }

        return $model;
    }
}
