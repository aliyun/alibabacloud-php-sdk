<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pai\V20240521\Models;

use AlibabaCloud\Dara\Model;

class GetUserAliUidByInstanceIdResponseBody extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $cpus;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $podName;

    /**
     * @var string
     */
    public $podUid;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resouceType;

    /**
     * @var string
     */
    public $resourceInstanceId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userUid;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'applicationName' => 'ApplicationName',
        'code' => 'Code',
        'cpus' => 'Cpus',
        'createTime' => 'CreateTime',
        'intranetIp' => 'IntranetIp',
        'memory' => 'Memory',
        'message' => 'Message',
        'namespaceId' => 'NamespaceId',
        'podName' => 'PodName',
        'podUid' => 'PodUid',
        'requestId' => 'RequestId',
        'resouceType' => 'ResouceType',
        'resourceInstanceId' => 'ResourceInstanceId',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
        'userUid' => 'UserUid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->cpus) {
            $res['Cpus'] = $this->cpus;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->podName) {
            $res['PodName'] = $this->podName;
        }

        if (null !== $this->podUid) {
            $res['PodUid'] = $this->podUid;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resouceType) {
            $res['ResouceType'] = $this->resouceType;
        }

        if (null !== $this->resourceInstanceId) {
            $res['ResourceInstanceId'] = $this->resourceInstanceId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->userUid) {
            $res['UserUid'] = $this->userUid;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Cpus'])) {
            $model->cpus = $map['Cpus'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['PodName'])) {
            $model->podName = $map['PodName'];
        }

        if (isset($map['PodUid'])) {
            $model->podUid = $map['PodUid'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResouceType'])) {
            $model->resouceType = $map['ResouceType'];
        }

        if (isset($map['ResourceInstanceId'])) {
            $model->resourceInstanceId = $map['ResourceInstanceId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['UserUid'])) {
            $model->userUid = $map['UserUid'];
        }

        return $model;
    }
}
