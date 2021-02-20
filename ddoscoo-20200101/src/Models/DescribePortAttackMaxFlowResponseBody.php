<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribePortAttackMaxFlowResponseBody extends Model
{
    /**
     * @var int
     */
    public $pps;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $bps;
    protected $_name = [
        'pps'       => 'Pps',
        'requestId' => 'RequestId',
        'bps'       => 'Bps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pps) {
            $res['Pps'] = $this->pps;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePortAttackMaxFlowResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pps'])) {
            $model->pps = $map['Pps'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }

        return $model;
    }
}
