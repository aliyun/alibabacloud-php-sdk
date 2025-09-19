<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetInterceptionSummaryResponseBody\interceptionSummary;

class GetInterceptionSummaryResponseBody extends Model
{
    /**
     * @var interceptionSummary
     */
    public $interceptionSummary;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'interceptionSummary' => 'InterceptionSummary',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->interceptionSummary) {
            $this->interceptionSummary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->interceptionSummary) {
            $res['InterceptionSummary'] = null !== $this->interceptionSummary ? $this->interceptionSummary->toArray($noStream) : $this->interceptionSummary;
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
        if (isset($map['InterceptionSummary'])) {
            $model->interceptionSummary = interceptionSummary::fromMap($map['InterceptionSummary']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
