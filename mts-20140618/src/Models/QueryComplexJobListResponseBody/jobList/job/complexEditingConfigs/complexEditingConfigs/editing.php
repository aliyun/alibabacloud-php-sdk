<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryComplexJobListResponseBody\jobList\job\complexEditingConfigs\complexEditingConfigs;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryComplexJobListResponseBody\jobList\job\complexEditingConfigs\complexEditingConfigs\editing\clipList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryComplexJobListResponseBody\jobList\job\complexEditingConfigs\complexEditingConfigs\editing\timeline;
use AlibabaCloud\Tea\Model;

class editing extends Model
{
    /**
     * @var timeline
     */
    public $timeline;

    /**
     * @var clipList
     */
    public $clipList;
    protected $_name = [
        'timeline' => 'Timeline',
        'clipList' => 'ClipList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeline) {
            $res['Timeline'] = null !== $this->timeline ? $this->timeline->toMap() : null;
        }
        if (null !== $this->clipList) {
            $res['ClipList'] = null !== $this->clipList ? $this->clipList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return editing
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Timeline'])) {
            $model->timeline = timeline::fromMap($map['Timeline']);
        }
        if (isset($map['ClipList'])) {
            $model->clipList = clipList::fromMap($map['ClipList']);
        }

        return $model;
    }
}
