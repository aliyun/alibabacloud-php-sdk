<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBruteForceSummaryResponseBody\bruteForceSummary;
use AlibabaCloud\Tea\Model;

class DescribeBruteForceSummaryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bruteForceSummary
     */
    public $bruteForceSummary;
    protected $_name = [
        'requestId'         => 'RequestId',
        'bruteForceSummary' => 'BruteForceSummary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->bruteForceSummary) {
            $res['BruteForceSummary'] = null !== $this->bruteForceSummary ? $this->bruteForceSummary->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BruteForceSummary'])) {
            $model->bruteForceSummary = bruteForceSummary::fromMap($map['BruteForceSummary']);
        }

        return $model;
    }
}
