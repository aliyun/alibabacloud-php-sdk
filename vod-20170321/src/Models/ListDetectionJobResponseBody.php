<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListDetectionJobResponseBody\detectionJobList;
use AlibabaCloud\Tea\Model;

class ListDetectionJobResponseBody extends Model
{
    /**
     * @var detectionJobList[]
     */
    public $detectionJobList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'detectionJobList' => 'DetectionJobList',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detectionJobList) {
            $res['DetectionJobList'] = [];
            if (null !== $this->detectionJobList && \is_array($this->detectionJobList)) {
                $n = 0;
                foreach ($this->detectionJobList as $item) {
                    $res['DetectionJobList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListDetectionJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetectionJobList'])) {
            if (!empty($map['DetectionJobList'])) {
                $model->detectionJobList = [];
                $n                       = 0;
                foreach ($map['DetectionJobList'] as $item) {
                    $model->detectionJobList[$n++] = null !== $item ? detectionJobList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
