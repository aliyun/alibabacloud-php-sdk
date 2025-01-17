<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomizedVoiceJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomizedVoiceJobsResponseBody\data\customizedVoiceJobList;

class data extends Model
{
    /**
     * @var customizedVoiceJobList[]
     */
    public $customizedVoiceJobList;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'customizedVoiceJobList' => 'CustomizedVoiceJobList',
        'totalCount'             => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->customizedVoiceJobList)) {
            Model::validateArray($this->customizedVoiceJobList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customizedVoiceJobList) {
            if (\is_array($this->customizedVoiceJobList)) {
                $res['CustomizedVoiceJobList'] = [];
                $n1                            = 0;
                foreach ($this->customizedVoiceJobList as $item1) {
                    $res['CustomizedVoiceJobList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['CustomizedVoiceJobList'])) {
            if (!empty($map['CustomizedVoiceJobList'])) {
                $model->customizedVoiceJobList = [];
                $n1                            = 0;
                foreach ($map['CustomizedVoiceJobList'] as $item1) {
                    $model->customizedVoiceJobList[$n1++] = customizedVoiceJobList::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
