<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBruteForceSummaryResponseBody\bruteForceSummary;
use AlibabaCloud\Tea\Model;

class DescribeBruteForceSummaryResponseBody extends Model
{
    /**
     * @description The statistics of IP address blocking policies.
     *
     * @var bruteForceSummary
     */
    public $bruteForceSummary;

    /**
     * @description The ID of the request.
     *
     * @example AE60EAE3-ABD0-897C-B0F16CAC6C7D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bruteForceSummary' => 'BruteForceSummary',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bruteForceSummary) {
            $res['BruteForceSummary'] = null !== $this->bruteForceSummary ? $this->bruteForceSummary->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBruteForceSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BruteForceSummary'])) {
            $model->bruteForceSummary = bruteForceSummary::fromMap($map['BruteForceSummary']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
