<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityScanRunLogResponseBody\logSegment;
use AlibabaCloud\Tea\Model;

class GetDataQualityScanRunLogResponseBody extends Model
{
    /**
     * @var logSegment
     */
    public $logSegment;

    /**
     * @example 0bc14115***159376359
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logSegment' => 'LogSegment',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->logSegment) {
            $res['LogSegment'] = null !== $this->logSegment ? $this->logSegment->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataQualityScanRunLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogSegment'])) {
            $model->logSegment = logSegment::fromMap($map['LogSegment']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
