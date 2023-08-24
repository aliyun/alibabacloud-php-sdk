<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterModificationHistoryResponseBody\historicalParameters;
use AlibabaCloud\Tea\Model;

class DescribeParameterModificationHistoryResponseBody extends Model
{
    /**
     * @description Details of the parameter modification records.
     *
     * @var historicalParameters
     */
    public $historicalParameters;

    /**
     * @description The ID of the request.
     *
     * @example 963C20F0-7CE1-4591-AAF3-6F3CD1CE****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'historicalParameters' => 'HistoricalParameters',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->historicalParameters) {
            $res['HistoricalParameters'] = null !== $this->historicalParameters ? $this->historicalParameters->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeParameterModificationHistoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HistoricalParameters'])) {
            $model->historicalParameters = historicalParameters::fromMap($map['HistoricalParameters']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
