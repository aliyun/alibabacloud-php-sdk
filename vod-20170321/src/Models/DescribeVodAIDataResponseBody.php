<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodAIDataResponseBody\AIData;

class DescribeVodAIDataResponseBody extends Model
{
    /**
     * @var AIData
     */
    public $AIData;

    /**
     * @var string
     */
    public $dataInterval;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIData' => 'AIData',
        'dataInterval' => 'DataInterval',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->AIData) {
            $this->AIData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIData) {
            $res['AIData'] = null !== $this->AIData ? $this->AIData->toArray($noStream) : $this->AIData;
        }

        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AIData'])) {
            $model->AIData = AIData::fromMap($map['AIData']);
        }

        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
