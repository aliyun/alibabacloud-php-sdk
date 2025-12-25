<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeThreatEventDetailResponseBody\threatEventDetail;

class DescribeThreatEventDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var threatEventDetail
     */
    public $threatEventDetail;
    protected $_name = [
        'requestId' => 'RequestId',
        'threatEventDetail' => 'ThreatEventDetail',
    ];

    public function validate()
    {
        if (null !== $this->threatEventDetail) {
            $this->threatEventDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->threatEventDetail) {
            $res['ThreatEventDetail'] = null !== $this->threatEventDetail ? $this->threatEventDetail->toArray($noStream) : $this->threatEventDetail;
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

        if (isset($map['ThreatEventDetail'])) {
            $model->threatEventDetail = threatEventDetail::fromMap($map['ThreatEventDetail']);
        }

        return $model;
    }
}
