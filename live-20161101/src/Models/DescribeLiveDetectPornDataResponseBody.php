<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDetectPornDataResponseBody\detectPornData;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->detectPornData) {
            $this->detectPornData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detectPornData) {
            $res['DetectPornData'] = null !== $this->detectPornData ? $this->detectPornData->toArray($noStream) : $this->detectPornData;
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
        if (isset($map['DetectPornData'])) {
            $model->detectPornData = detectPornData::fromMap($map['DetectPornData']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
