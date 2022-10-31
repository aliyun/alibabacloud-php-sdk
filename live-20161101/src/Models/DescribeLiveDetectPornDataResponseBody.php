<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDetectPornDataResponseBody\detectPornData;
use AlibabaCloud\Tea\Model;

class DescribeLiveDetectPornDataResponseBody extends Model
{
    /**
     * @var detectPornData
     */
    public $detectPornData;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'detectPornData' => 'DetectPornData',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detectPornData) {
            $res['DetectPornData'] = null !== $this->detectPornData ? $this->detectPornData->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDetectPornDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetectPornData'])) {
            $model->detectPornData = detectPornData::fromMap($map['DetectPornData']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
