<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticReportsResponseBody\reports;

class DescribeDiagnosticReportsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var reports
     */
    public $reports;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken' => 'NextToken',
        'reports' => 'Reports',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->reports) {
            $this->reports->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->reports) {
            $res['Reports'] = null !== $this->reports ? $this->reports->toArray($noStream) : $this->reports;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Reports'])) {
            $model->reports = reports::fromMap($map['Reports']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
