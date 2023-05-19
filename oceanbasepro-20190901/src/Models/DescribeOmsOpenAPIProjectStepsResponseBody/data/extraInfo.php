<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOmsOpenAPIProjectStepsResponseBody\data;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOmsOpenAPIProjectStepsResponseBody\data\extraInfo\errorDetails;
use AlibabaCloud\Tea\Model;

class extraInfo extends Model
{
    /**
     * @description The job ID.
     *
     * @example INNER_ERROR
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description Schema migration
     *
     * @var errorDetails[]
     */
    public $errorDetails;

    /**
     * @description The resource deployment ID.
     *
     * @example A system error occurred.
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description The error code (new).
     *
     * @var string[]
     */
    public $errorParam;

    /**
     * @description The additional information. The value is a JSON string.
     *
     * @example 2020-05-22T17:04:18
     *
     * @var string
     */
    public $failedTime;
    protected $_name = [
        'errorCode'    => 'ErrorCode',
        'errorDetails' => 'ErrorDetails',
        'errorMsg'     => 'ErrorMsg',
        'errorParam'   => 'ErrorParam',
        'failedTime'   => 'FailedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorDetails) {
            $res['ErrorDetails'] = [];
            if (null !== $this->errorDetails && \is_array($this->errorDetails)) {
                $n = 0;
                foreach ($this->errorDetails as $item) {
                    $res['ErrorDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->errorParam) {
            $res['ErrorParam'] = $this->errorParam;
        }
        if (null !== $this->failedTime) {
            $res['FailedTime'] = $this->failedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extraInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorDetails'])) {
            if (!empty($map['ErrorDetails'])) {
                $model->errorDetails = [];
                $n                   = 0;
                foreach ($map['ErrorDetails'] as $item) {
                    $model->errorDetails[$n++] = null !== $item ? errorDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['ErrorParam'])) {
            $model->errorParam = $map['ErrorParam'];
        }
        if (isset($map['FailedTime'])) {
            $model->failedTime = $map['FailedTime'];
        }

        return $model;
    }
}
