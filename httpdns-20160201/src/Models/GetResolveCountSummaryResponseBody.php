<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\GetResolveCountSummaryResponseBody\resolveSummary;

class GetResolveCountSummaryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resolveSummary
     */
    public $resolveSummary;
    protected $_name = [
        'requestId' => 'RequestId',
        'resolveSummary' => 'ResolveSummary',
    ];

    public function validate()
    {
        if (null !== $this->resolveSummary) {
            $this->resolveSummary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resolveSummary) {
            $res['ResolveSummary'] = null !== $this->resolveSummary ? $this->resolveSummary->toArray($noStream) : $this->resolveSummary;
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

        if (isset($map['ResolveSummary'])) {
            $model->resolveSummary = resolveSummary::fromMap($map['ResolveSummary']);
        }

        return $model;
    }
}
