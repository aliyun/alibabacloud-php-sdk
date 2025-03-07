<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeJobResponseBody\job;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeJobResponseBody\job\outputStream\streamInfos;
use AlibabaCloud\Tea\Model;

class outputStream extends Model
{
    /**
     * @description The information about the output stream.
     *
     * @var streamInfos[]
     */
    public $streamInfos;
    protected $_name = [
        'streamInfos' => 'StreamInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->streamInfos) {
            $res['StreamInfos'] = [];
            if (null !== $this->streamInfos && \is_array($this->streamInfos)) {
                $n = 0;
                foreach ($this->streamInfos as $item) {
                    $res['StreamInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputStream
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StreamInfos'])) {
            if (!empty($map['StreamInfos'])) {
                $model->streamInfos = [];
                $n                  = 0;
                foreach ($map['StreamInfos'] as $item) {
                    $model->streamInfos[$n++] = null !== $item ? streamInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
