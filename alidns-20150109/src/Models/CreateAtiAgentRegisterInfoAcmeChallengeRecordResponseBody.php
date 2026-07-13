<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\CreateAtiAgentRegisterInfoAcmeChallengeRecordResponseBody\accessDeniedDetail;

class CreateAtiAgentRegisterInfoAcmeChallengeRecordResponseBody extends Model
{
    /**
     * @var accessDeniedDetail
     */
    public $accessDeniedDetail;

    /**
     * @var string
     */
    public $agentRegisterInfoId;

    /**
     * @var string
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $expireTimestamp;

    /**
     * @var string
     */
    public $recordName;

    /**
     * @var string
     */
    public $recordType;

    /**
     * @var string
     */
    public $recordValue;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $updateTimestamp;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'agentRegisterInfoId' => 'AgentRegisterInfoId',
        'createTimestamp' => 'CreateTimestamp',
        'expireTimestamp' => 'ExpireTimestamp',
        'recordName' => 'RecordName',
        'recordType' => 'RecordType',
        'recordValue' => 'RecordValue',
        'requestId' => 'RequestId',
        'updateTimestamp' => 'UpdateTimestamp',
    ];

    public function validate()
    {
        if (null !== $this->accessDeniedDetail) {
            $this->accessDeniedDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = null !== $this->accessDeniedDetail ? $this->accessDeniedDetail->toArray($noStream) : $this->accessDeniedDetail;
        }

        if (null !== $this->agentRegisterInfoId) {
            $res['AgentRegisterInfoId'] = $this->agentRegisterInfoId;
        }

        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->expireTimestamp) {
            $res['ExpireTimestamp'] = $this->expireTimestamp;
        }

        if (null !== $this->recordName) {
            $res['RecordName'] = $this->recordName;
        }

        if (null !== $this->recordType) {
            $res['RecordType'] = $this->recordType;
        }

        if (null !== $this->recordValue) {
            $res['RecordValue'] = $this->recordValue;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = accessDeniedDetail::fromMap($map['AccessDeniedDetail']);
        }

        if (isset($map['AgentRegisterInfoId'])) {
            $model->agentRegisterInfoId = $map['AgentRegisterInfoId'];
        }

        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        if (isset($map['ExpireTimestamp'])) {
            $model->expireTimestamp = $map['ExpireTimestamp'];
        }

        if (isset($map['RecordName'])) {
            $model->recordName = $map['RecordName'];
        }

        if (isset($map['RecordType'])) {
            $model->recordType = $map['RecordType'];
        }

        if (isset($map['RecordValue'])) {
            $model->recordValue = $map['RecordValue'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }

        return $model;
    }
}
