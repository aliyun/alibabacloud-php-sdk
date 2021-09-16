<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListDetectionJobResponseBody\detectionJobList;
use AlibabaCloud\Tea\Model;

class ListDetectionJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var detectionJobList[]
     */
    public $detectionJobList;
    protected $_name = [
        'requestId'        => 'RequestId',
        'detectionJobList' => 'DetectionJobList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->detectionJobList) {
            $res['DetectionJobList'] = [];
            if (null !== $this->detectionJobList && \is_array($this->detectionJobList)) {
                $n = 0;
                foreach ($this->detectionJobList as $item) {
                    $res['DetectionJobList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDetectionJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DetectionJobList'])) {
            if (!empty($map['DetectionJobList'])) {
                $model->detectionJobList = [];
                $n                       = 0;
                foreach ($map['DetectionJobList'] as $item) {
                    $model->detectionJobList[$n++] = null !== $item ? detectionJobList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
