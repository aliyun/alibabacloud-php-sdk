<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetInterceptionSummaryResponseBody\interceptionSummary;
use AlibabaCloud\Tea\Model;

class GetInterceptionSummaryResponseBody extends Model
{
    /**
     * @description The statistics.
     *
     * @var interceptionSummary
     */
    public $interceptionSummary;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example F35F45B0-5D6B-4238-BE02-A62D0760E840
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'interceptionSummary' => 'InterceptionSummary',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->interceptionSummary) {
            $res['InterceptionSummary'] = null !== $this->interceptionSummary ? $this->interceptionSummary->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInterceptionSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InterceptionSummary'])) {
            $model->interceptionSummary = interceptionSummary::fromMap($map['InterceptionSummary']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
