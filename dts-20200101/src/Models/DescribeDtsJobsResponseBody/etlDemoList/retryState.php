<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList;

use AlibabaCloud\Tea\Model;

class retryState extends Model
{
    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var int
     */
    public $maxRetryTime;

    /**
     * @var int
     */
    public $retryCount;

    /**
     * @var string
     */
    public $retryTarget;

    /**
     * @var int
     */
    public $retryTime;
    protected $_name = [
        'errMessage'   => 'ErrMessage',
        'maxRetryTime' => 'MaxRetryTime',
        'retryCount'   => 'RetryCount',
        'retryTarget'  => 'RetryTarget',
        'retryTime'    => 'RetryTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->maxRetryTime) {
            $res['MaxRetryTime'] = $this->maxRetryTime;
        }
        if (null !== $this->retryCount) {
            $res['RetryCount'] = $this->retryCount;
        }
        if (null !== $this->retryTarget) {
            $res['RetryTarget'] = $this->retryTarget;
        }
        if (null !== $this->retryTime) {
            $res['RetryTime'] = $this->retryTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return retryState
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['MaxRetryTime'])) {
            $model->maxRetryTime = $map['MaxRetryTime'];
        }
        if (isset($map['RetryCount'])) {
            $model->retryCount = $map['RetryCount'];
        }
        if (isset($map['RetryTarget'])) {
            $model->retryTarget = $map['RetryTarget'];
        }
        if (isset($map['RetryTime'])) {
            $model->retryTime = $map['RetryTime'];
        }

        return $model;
    }
}
