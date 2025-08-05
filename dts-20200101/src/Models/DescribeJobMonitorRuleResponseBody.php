<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeJobMonitorRuleResponseBody\monitorRules;

class DescribeJobMonitorRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $dtsJobId;

    /**
     * @var string
     */
    public $dynamicMessage;

    /**
     * @var string
     */
    public $errCode;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var monitorRules[]
     */
    public $monitorRules;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string[]
     */
    public $topics;
    protected $_name = [
        'code' => 'Code',
        'dtsJobId' => 'DtsJobId',
        'dynamicMessage' => 'DynamicMessage',
        'errCode' => 'ErrCode',
        'errMessage' => 'ErrMessage',
        'httpStatusCode' => 'HttpStatusCode',
        'monitorRules' => 'MonitorRules',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'topics' => 'Topics',
    ];

    public function validate()
    {
        if (\is_array($this->monitorRules)) {
            Model::validateArray($this->monitorRules);
        }
        if (\is_array($this->topics)) {
            Model::validateArray($this->topics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }

        if (null !== $this->dynamicMessage) {
            $res['DynamicMessage'] = $this->dynamicMessage;
        }

        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }

        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->monitorRules) {
            if (\is_array($this->monitorRules)) {
                $res['MonitorRules'] = [];
                $n1 = 0;
                foreach ($this->monitorRules as $item1) {
                    $res['MonitorRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->topics) {
            if (\is_array($this->topics)) {
                $res['Topics'] = [];
                $n1 = 0;
                foreach ($this->topics as $item1) {
                    $res['Topics'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }

        if (isset($map['DynamicMessage'])) {
            $model->dynamicMessage = $map['DynamicMessage'];
        }

        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }

        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['MonitorRules'])) {
            if (!empty($map['MonitorRules'])) {
                $model->monitorRules = [];
                $n1 = 0;
                foreach ($map['MonitorRules'] as $item1) {
                    $model->monitorRules[$n1] = monitorRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['Topics'])) {
            if (!empty($map['Topics'])) {
                $model->topics = [];
                $n1 = 0;
                foreach ($map['Topics'] as $item1) {
                    $model->topics[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
