<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeSummaryResponseBody\transcodeSummaryList;
use AlibabaCloud\Tea\Model;

class GetTranscodeSummaryResponseBody extends Model
{
    /**
     * @description The IDs of the audio or video files that do not exist.
     *
     * @var string[]
     */
    public $nonExistVideoIds;

    /**
     * @description The ID of the request.
     *
     * @example 25818875-5F78-4A*****F6-D7393642CA58
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The transcoding summary of the file.
     *
     * @var transcodeSummaryList[]
     */
    public $transcodeSummaryList;
    protected $_name = [
        'nonExistVideoIds'     => 'NonExistVideoIds',
        'requestId'            => 'RequestId',
        'transcodeSummaryList' => 'TranscodeSummaryList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nonExistVideoIds) {
            $res['NonExistVideoIds'] = $this->nonExistVideoIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->transcodeSummaryList) {
            $res['TranscodeSummaryList'] = [];
            if (null !== $this->transcodeSummaryList && \is_array($this->transcodeSummaryList)) {
                $n = 0;
                foreach ($this->transcodeSummaryList as $item) {
                    $res['TranscodeSummaryList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTranscodeSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NonExistVideoIds'])) {
            if (!empty($map['NonExistVideoIds'])) {
                $model->nonExistVideoIds = $map['NonExistVideoIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TranscodeSummaryList'])) {
            if (!empty($map['TranscodeSummaryList'])) {
                $model->transcodeSummaryList = [];
                $n                           = 0;
                foreach ($map['TranscodeSummaryList'] as $item) {
                    $model->transcodeSummaryList[$n++] = null !== $item ? transcodeSummaryList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
