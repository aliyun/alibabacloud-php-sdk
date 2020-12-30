<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeUnbindFlowLogSagsResponseBody\sags;
use AlibabaCloud\Tea\Model;

class DescribeUnbindFlowLogSagsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $count;

    /**
     * @var sags
     */
    public $sags;
    protected $_name = [
        'requestId' => 'RequestId',
        'count'     => 'Count',
        'sags'      => 'Sags',
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
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->sags) {
            $res['Sags'] = null !== $this->sags ? $this->sags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUnbindFlowLogSagsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Sags'])) {
            $model->sags = sags::fromMap($map['Sags']);
        }

        return $model;
    }
}
