<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserBusinessStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $isEnabled;

    /**
     * @var bool
     */
    public $isIndebted;

    /**
     * @var bool
     */
    public $isIndebtedOverdue;

    /**
     * @var bool
     */
    public $isRiskControl;

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
    protected $_name = [
        'code'              => 'Code',
        'isEnabled'         => 'IsEnabled',
        'isIndebted'        => 'IsIndebted',
        'isIndebtedOverdue' => 'IsIndebtedOverdue',
        'isRiskControl'     => 'IsRiskControl',
        'message'           => 'Message',
        'requestId'         => 'RequestId',
        'success'           => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->isEnabled) {
            $res['IsEnabled'] = $this->isEnabled;
        }
        if (null !== $this->isIndebted) {
            $res['IsIndebted'] = $this->isIndebted;
        }
        if (null !== $this->isIndebtedOverdue) {
            $res['IsIndebtedOverdue'] = $this->isIndebtedOverdue;
        }
        if (null !== $this->isRiskControl) {
            $res['IsRiskControl'] = $this->isRiskControl;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserBusinessStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IsEnabled'])) {
            $model->isEnabled = $map['IsEnabled'];
        }
        if (isset($map['IsIndebted'])) {
            $model->isIndebted = $map['IsIndebted'];
        }
        if (isset($map['IsIndebtedOverdue'])) {
            $model->isIndebtedOverdue = $map['IsIndebtedOverdue'];
        }
        if (isset($map['IsRiskControl'])) {
            $model->isRiskControl = $map['IsRiskControl'];
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

        return $model;
    }
}
