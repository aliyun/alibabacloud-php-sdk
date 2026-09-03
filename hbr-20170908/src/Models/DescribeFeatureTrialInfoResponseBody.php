<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class DescribeFeatureTrialInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $featureEnabled;

    /**
     * @var bool
     */
    public $inTrialPeriod;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $trialExpireTime;
    protected $_name = [
        'code' => 'Code',
        'featureEnabled' => 'FeatureEnabled',
        'inTrialPeriod' => 'InTrialPeriod',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'trialExpireTime' => 'TrialExpireTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->featureEnabled) {
            $res['FeatureEnabled'] = $this->featureEnabled;
        }

        if (null !== $this->inTrialPeriod) {
            $res['InTrialPeriod'] = $this->inTrialPeriod;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->trialExpireTime) {
            $res['TrialExpireTime'] = $this->trialExpireTime;
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

        if (isset($map['FeatureEnabled'])) {
            $model->featureEnabled = $map['FeatureEnabled'];
        }

        if (isset($map['InTrialPeriod'])) {
            $model->inTrialPeriod = $map['InTrialPeriod'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TrialExpireTime'])) {
            $model->trialExpireTime = $map['TrialExpireTime'];
        }

        return $model;
    }
}
