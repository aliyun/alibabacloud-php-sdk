<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeGatherStatsResultResponseBody\gatherStatsResult;
use AlibabaCloud\Tea\Model;

class DescribeGatherStatsResultResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var gatherStatsResult
     */
    public $gatherStatsResult;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'message'           => 'Message',
        'requestId'         => 'RequestId',
        'gatherStatsResult' => 'GatherStatsResult',
        'code'              => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->gatherStatsResult) {
            $res['GatherStatsResult'] = null !== $this->gatherStatsResult ? $this->gatherStatsResult->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGatherStatsResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['GatherStatsResult'])) {
            $model->gatherStatsResult = gatherStatsResult::fromMap($map['GatherStatsResult']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
