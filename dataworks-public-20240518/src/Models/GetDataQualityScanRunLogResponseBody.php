<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityScanRunLogResponseBody\logSegment;

class GetDataQualityScanRunLogResponseBody extends Model
{
    /**
     * @var logSegment
     */
    public $logSegment;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logSegment' => 'LogSegment',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->logSegment) {
            $this->logSegment->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logSegment) {
            $res['LogSegment'] = null !== $this->logSegment ? $this->logSegment->toArray($noStream) : $this->logSegment;
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
        if (isset($map['LogSegment'])) {
            $model->logSegment = logSegment::fromMap($map['LogSegment']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
