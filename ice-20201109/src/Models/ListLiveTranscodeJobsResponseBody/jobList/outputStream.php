<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveTranscodeJobsResponseBody\jobList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveTranscodeJobsResponseBody\jobList\outputStream\streamInfos;

class outputStream extends Model
{
    /**
     * @var streamInfos[]
     */
    public $streamInfos;
    protected $_name = [
        'streamInfos' => 'StreamInfos',
    ];

    public function validate()
    {
        if (\is_array($this->streamInfos)) {
            Model::validateArray($this->streamInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->streamInfos) {
            if (\is_array($this->streamInfos)) {
                $res['StreamInfos'] = [];
                $n1                 = 0;
                foreach ($this->streamInfos as $item1) {
                    $res['StreamInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['StreamInfos'])) {
            if (!empty($map['StreamInfos'])) {
                $model->streamInfos = [];
                $n1                 = 0;
                foreach ($map['StreamInfos'] as $item1) {
                    $model->streamInfos[$n1++] = streamInfos::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
