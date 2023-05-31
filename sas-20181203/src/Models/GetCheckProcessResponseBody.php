<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetCheckProcessResponseBody extends Model
{
    /**
     * @description The total number of assets on which the task is complete.
     *
     * @example 80
     *
     * @var int
     */
    public $finishCount;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example D18B5DAD-BA97-5552-AE48-83F59D5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of assets on which the task is performed.
     *
     * @example 113
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'finishCount' => 'FinishCount',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->finishCount) {
            $res['FinishCount'] = $this->finishCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCheckProcessResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FinishCount'])) {
            $model->finishCount = $map['FinishCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
