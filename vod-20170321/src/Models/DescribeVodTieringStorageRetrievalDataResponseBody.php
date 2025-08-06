<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTieringStorageRetrievalDataResponseBody\retrievalData;

class DescribeVodTieringStorageRetrievalDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var retrievalData[]
     */
    public $retrievalData;
    protected $_name = [
        'requestId' => 'RequestId',
        'retrievalData' => 'RetrievalData',
    ];

    public function validate()
    {
        if (\is_array($this->retrievalData)) {
            Model::validateArray($this->retrievalData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->retrievalData) {
            if (\is_array($this->retrievalData)) {
                $res['RetrievalData'] = [];
                $n1 = 0;
                foreach ($this->retrievalData as $item1) {
                    $res['RetrievalData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RetrievalData'])) {
            if (!empty($map['RetrievalData'])) {
                $model->retrievalData = [];
                $n1 = 0;
                foreach ($map['RetrievalData'] as $item1) {
                    $model->retrievalData[$n1] = retrievalData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
