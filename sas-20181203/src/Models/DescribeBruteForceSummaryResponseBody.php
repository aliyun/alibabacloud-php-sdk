<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBruteForceSummaryResponseBody\bruteForceSummary;

class DescribeBruteForceSummaryResponseBody extends Model
{
    /**
     * @var bruteForceSummary
     */
    public $bruteForceSummary;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bruteForceSummary' => 'BruteForceSummary',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->bruteForceSummary) {
            $this->bruteForceSummary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bruteForceSummary) {
            $res['BruteForceSummary'] = null !== $this->bruteForceSummary ? $this->bruteForceSummary->toArray($noStream) : $this->bruteForceSummary;
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
        if (isset($map['BruteForceSummary'])) {
            $model->bruteForceSummary = bruteForceSummary::fromMap($map['BruteForceSummary']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
