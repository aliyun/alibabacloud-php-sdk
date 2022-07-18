<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DescribeStressResponseBody extends Model
{
    /**
     * @var int
     */
    public $availableAgent;

    /**
     * @var string
     */
    public $callerUid;

    /**
     * @var int
     */
    public $desiredAgent;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $parentUid;

    /**
     * @var string
     */
    public $reason;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $stressName;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'availableAgent' => 'AvailableAgent',
        'callerUid'      => 'CallerUid',
        'desiredAgent'   => 'DesiredAgent',
        'message'        => 'Message',
        'parentUid'      => 'ParentUid',
        'reason'         => 'Reason',
        'requestId'      => 'RequestId',
        'serviceName'    => 'ServiceName',
        'status'         => 'Status',
        'stressName'     => 'StressName',
        'token'          => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableAgent) {
            $res['AvailableAgent'] = $this->availableAgent;
        }
        if (null !== $this->callerUid) {
            $res['CallerUid'] = $this->callerUid;
        }
        if (null !== $this->desiredAgent) {
            $res['DesiredAgent'] = $this->desiredAgent;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->parentUid) {
            $res['ParentUid'] = $this->parentUid;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stressName) {
            $res['StressName'] = $this->stressName;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStressResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableAgent'])) {
            $model->availableAgent = $map['AvailableAgent'];
        }
        if (isset($map['CallerUid'])) {
            $model->callerUid = $map['CallerUid'];
        }
        if (isset($map['DesiredAgent'])) {
            $model->desiredAgent = $map['DesiredAgent'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ParentUid'])) {
            $model->parentUid = $map['ParentUid'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StressName'])) {
            $model->stressName = $map['StressName'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
