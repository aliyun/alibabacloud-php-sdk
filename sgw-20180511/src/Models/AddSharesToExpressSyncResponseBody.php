<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class AddSharesToExpressSyncResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $mnsFullSyncDelay;

    /**
     * @var string
     */
    public $mnsInnerEndpoint;

    /**
     * @var string
     */
    public $mnsPublicEndpoint;

    /**
     * @var string
     */
    public $mnsQueues;

    /**
     * @var string
     */
    public $mnsTopic;

    /**
     * @example 1EDBC004-6B1C-4511-ACF5-0B4875BA3887
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example t-0001xv7je357xr6ql***
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'code'              => 'Code',
        'message'           => 'Message',
        'mnsFullSyncDelay'  => 'MnsFullSyncDelay',
        'mnsInnerEndpoint'  => 'MnsInnerEndpoint',
        'mnsPublicEndpoint' => 'MnsPublicEndpoint',
        'mnsQueues'         => 'MnsQueues',
        'mnsTopic'          => 'MnsTopic',
        'requestId'         => 'RequestId',
        'success'           => 'Success',
        'taskId'            => 'TaskId',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->mnsFullSyncDelay) {
            $res['MnsFullSyncDelay'] = $this->mnsFullSyncDelay;
        }
        if (null !== $this->mnsInnerEndpoint) {
            $res['MnsInnerEndpoint'] = $this->mnsInnerEndpoint;
        }
        if (null !== $this->mnsPublicEndpoint) {
            $res['MnsPublicEndpoint'] = $this->mnsPublicEndpoint;
        }
        if (null !== $this->mnsQueues) {
            $res['MnsQueues'] = $this->mnsQueues;
        }
        if (null !== $this->mnsTopic) {
            $res['MnsTopic'] = $this->mnsTopic;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddSharesToExpressSyncResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['MnsFullSyncDelay'])) {
            $model->mnsFullSyncDelay = $map['MnsFullSyncDelay'];
        }
        if (isset($map['MnsInnerEndpoint'])) {
            $model->mnsInnerEndpoint = $map['MnsInnerEndpoint'];
        }
        if (isset($map['MnsPublicEndpoint'])) {
            $model->mnsPublicEndpoint = $map['MnsPublicEndpoint'];
        }
        if (isset($map['MnsQueues'])) {
            $model->mnsQueues = $map['MnsQueues'];
        }
        if (isset($map['MnsTopic'])) {
            $model->mnsTopic = $map['MnsTopic'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
