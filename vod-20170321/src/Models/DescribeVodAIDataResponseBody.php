<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodAIDataResponseBody\AIData;
use AlibabaCloud\Tea\Model;

class DescribeVodAIDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $dataInterval;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var AIData
     */
    public $AIData;
    protected $_name = [
        'dataInterval' => 'DataInterval',
        'requestId'    => 'RequestId',
        'AIData'       => 'AIData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->AIData) {
            $res['AIData'] = null !== $this->AIData ? $this->AIData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodAIDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AIData'])) {
            $model->AIData = AIData::fromMap($map['AIData']);
        }

        return $model;
    }
}
