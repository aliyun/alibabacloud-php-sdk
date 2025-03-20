<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListJobInfoResponseBody\jobInfoList;
use AlibabaCloud\Tea\Model;

class ListJobInfoResponseBody extends Model
{
    /**
     * @description The historical tasks of the last 6 months.
     *
     * @var jobInfoList[]
     */
    public $jobInfoList;

    /**
     * @description The type of the task. Valid values:
     *
     *   transcode
     *   snapshot
     *   ai
     *
     * @example transcode
     *
     * @var string
     */
    public $jobType;

    /**
     * @description The ID of the media asset.
     *
     * @example 30e5d7**********bd900764de7c0102
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The request ID.
     *
     * @example 6708D849-F109-1A6C-AC91-************
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobInfoList' => 'JobInfoList',
        'jobType' => 'JobType',
        'mediaId' => 'MediaId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobInfoList) {
            $res['JobInfoList'] = [];
            if (null !== $this->jobInfoList && \is_array($this->jobInfoList)) {
                $n = 0;
                foreach ($this->jobInfoList as $item) {
                    $res['JobInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListJobInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobInfoList'])) {
            if (!empty($map['JobInfoList'])) {
                $model->jobInfoList = [];
                $n = 0;
                foreach ($map['JobInfoList'] as $item) {
                    $model->jobInfoList[$n++] = null !== $item ? jobInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
