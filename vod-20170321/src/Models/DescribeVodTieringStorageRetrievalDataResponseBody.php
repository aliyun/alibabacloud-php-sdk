<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTieringStorageRetrievalDataResponseBody\retrievalData;
use AlibabaCloud\Tea\Model;

class DescribeVodTieringStorageRetrievalDataResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 25818875-5F78-4A13-BEF6-D73936****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The data retrieval information.
     *
     * @var retrievalData[]
     */
    public $retrievalData;
    protected $_name = [
        'requestId'     => 'RequestId',
        'retrievalData' => 'RetrievalData',
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
        if (null !== $this->retrievalData) {
            $res['RetrievalData'] = [];
            if (null !== $this->retrievalData && \is_array($this->retrievalData)) {
                $n = 0;
                foreach ($this->retrievalData as $item) {
                    $res['RetrievalData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodTieringStorageRetrievalDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RetrievalData'])) {
            if (!empty($map['RetrievalData'])) {
                $model->retrievalData = [];
                $n                    = 0;
                foreach ($map['RetrievalData'] as $item) {
                    $model->retrievalData[$n++] = null !== $item ? retrievalData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
