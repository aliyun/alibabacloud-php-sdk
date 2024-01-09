<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models;

use AlibabaCloud\Tea\Model;

class DescribeRecoveryPlanResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example {
     * }
     * @var string
     */
    public $content;

    /**
     * @example forward
     *
     * @var string
     */
    public $direction;

    /**
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example rp-xxxxxxxxxxxxxxxxxx
     *
     * @var string
     */
    public $recoveryPlanId;

    /**
     * @example 6F3884EC-AECB-52EF-AFE3-BC13A9688DEB
     *
     * @var string
     */
    public $requestId;

    /**
     * @example init
     *
     * @var string
     */
    public $status;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'           => 'Code',
        'content'        => 'Content',
        'direction'      => 'Direction',
        'message'        => 'Message',
        'name'           => 'Name',
        'recoveryPlanId' => 'RecoveryPlanId',
        'requestId'      => 'RequestId',
        'status'         => 'Status',
        'success'        => 'Success',
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
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->recoveryPlanId) {
            $res['RecoveryPlanId'] = $this->recoveryPlanId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRecoveryPlanResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RecoveryPlanId'])) {
            $model->recoveryPlanId = $map['RecoveryPlanId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
