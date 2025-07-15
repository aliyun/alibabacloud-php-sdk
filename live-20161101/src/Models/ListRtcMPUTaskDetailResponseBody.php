<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUTaskDetailResponseBody\MPUTasks;
use AlibabaCloud\Tea\Model;

class ListRtcMPUTaskDetailResponseBody extends Model
{
    /**
     * @description The parameters that you configured when you called the StartLiveMPUTask operation to create the tasks.
     *
     * @var MPUTasks[]
     */
    public $MPUTasks;

    /**
     * @description The request ID.
     *
     * @example ******3B-0E1A-586A-AC29-742247******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'MPUTasks' => 'MPUTasks',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->MPUTasks) {
            $res['MPUTasks'] = [];
            if (null !== $this->MPUTasks && \is_array($this->MPUTasks)) {
                $n = 0;
                foreach ($this->MPUTasks as $item) {
                    $res['MPUTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRtcMPUTaskDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MPUTasks'])) {
            if (!empty($map['MPUTasks'])) {
                $model->MPUTasks = [];
                $n = 0;
                foreach ($map['MPUTasks'] as $item) {
                    $model->MPUTasks[$n++] = null !== $item ? MPUTasks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
