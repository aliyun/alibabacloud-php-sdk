<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeUnbindFlowLogSagsResponseBody\sags;

class DescribeUnbindFlowLogSagsResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sags
     */
    public $sags;
    protected $_name = [
        'count' => 'Count',
        'requestId' => 'RequestId',
        'sags' => 'Sags',
    ];

    public function validate()
    {
        if (null !== $this->sags) {
            $this->sags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sags) {
            $res['Sags'] = null !== $this->sags ? $this->sags->toArray($noStream) : $this->sags;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Sags'])) {
            $model->sags = sags::fromMap($map['Sags']);
        }

        return $model;
    }
}
