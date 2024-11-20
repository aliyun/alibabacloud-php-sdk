<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomizedVoiceJobsResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomizedVoiceJobsResponseBody\data\customizedVoiceJobList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The queried human voice cloning jobs.
     *
     * @var customizedVoiceJobList[]
     */
    public $customizedVoiceJobList;

    /**
     * @description The total number of entries returned.
     *
     * @example 271
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'customizedVoiceJobList' => 'CustomizedVoiceJobList',
        'totalCount'             => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customizedVoiceJobList) {
            $res['CustomizedVoiceJobList'] = [];
            if (null !== $this->customizedVoiceJobList && \is_array($this->customizedVoiceJobList)) {
                $n = 0;
                foreach ($this->customizedVoiceJobList as $item) {
                    $res['CustomizedVoiceJobList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomizedVoiceJobList'])) {
            if (!empty($map['CustomizedVoiceJobList'])) {
                $model->customizedVoiceJobList = [];
                $n                             = 0;
                foreach ($map['CustomizedVoiceJobList'] as $item) {
                    $model->customizedVoiceJobList[$n++] = null !== $item ? customizedVoiceJobList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
