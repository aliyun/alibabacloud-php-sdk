<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\subtitleConfig\extSubtitleList;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\subtitleConfig\subtitleList;
use AlibabaCloud\Tea\Model;

class subtitleConfig extends Model
{
    /**
     * @var subtitleList
     */
    public $subtitleList;

    /**
     * @var extSubtitleList
     */
    public $extSubtitleList;
    protected $_name = [
        'subtitleList'    => 'SubtitleList',
        'extSubtitleList' => 'ExtSubtitleList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subtitleList) {
            $res['SubtitleList'] = null !== $this->subtitleList ? $this->subtitleList->toMap() : null;
        }
        if (null !== $this->extSubtitleList) {
            $res['ExtSubtitleList'] = null !== $this->extSubtitleList ? $this->extSubtitleList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subtitleConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubtitleList'])) {
            $model->subtitleList = subtitleList::fromMap($map['SubtitleList']);
        }
        if (isset($map['ExtSubtitleList'])) {
            $model->extSubtitleList = extSubtitleList::fromMap($map['ExtSubtitleList']);
        }

        return $model;
    }
}
