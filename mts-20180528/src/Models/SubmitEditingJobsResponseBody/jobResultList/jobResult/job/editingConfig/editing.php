<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig;

use AlibabaCloud\SDK\Mts\V20180528\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\editing\clipList;
use AlibabaCloud\SDK\Mts\V20180528\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\editing\timeline;
use AlibabaCloud\Tea\Model;

class editing extends Model
{
    /**
     * @var clipList
     */
    public $clipList;

    /**
     * @var timeline
     */
    public $timeline;
    protected $_name = [
        'clipList' => 'ClipList',
        'timeline' => 'Timeline',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clipList) {
            $res['ClipList'] = null !== $this->clipList ? $this->clipList->toMap() : null;
        }
        if (null !== $this->timeline) {
            $res['Timeline'] = null !== $this->timeline ? $this->timeline->toMap() : null;
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
        if (isset($map['ClipList'])) {
            $model->clipList = clipList::fromMap($map['ClipList']);
        }
        if (isset($map['Timeline'])) {
            $model->timeline = timeline::fromMap($map['Timeline']);
        }

        return $model;
    }
}
