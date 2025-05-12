<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\subtitleConfig\extSubtitleList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\subtitleConfig\subtitleList;

class subtitleConfig extends Model
{
    /**
     * @var extSubtitleList
     */
    public $extSubtitleList;

    /**
     * @var subtitleList
     */
    public $subtitleList;
    protected $_name = [
        'extSubtitleList' => 'ExtSubtitleList',
        'subtitleList' => 'SubtitleList',
    ];

    public function validate()
    {
        if (null !== $this->extSubtitleList) {
            $this->extSubtitleList->validate();
        }
        if (null !== $this->subtitleList) {
            $this->subtitleList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extSubtitleList) {
            $res['ExtSubtitleList'] = null !== $this->extSubtitleList ? $this->extSubtitleList->toArray($noStream) : $this->extSubtitleList;
        }

        if (null !== $this->subtitleList) {
            $res['SubtitleList'] = null !== $this->subtitleList ? $this->subtitleList->toArray($noStream) : $this->subtitleList;
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
        if (isset($map['ExtSubtitleList'])) {
            $model->extSubtitleList = extSubtitleList::fromMap($map['ExtSubtitleList']);
        }

        if (isset($map['SubtitleList'])) {
            $model->subtitleList = subtitleList::fromMap($map['SubtitleList']);
        }

        return $model;
    }
}
