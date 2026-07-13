<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\VerifyAtiAgentDnsRecordsResponseBody\accessDeniedDetail;
use AlibabaCloud\SDK\Alidns\V20150109\Models\VerifyAtiAgentDnsRecordsResponseBody\results;

class VerifyAtiAgentDnsRecordsResponseBody extends Model
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
    public $agentStatus;

    /**
     * @var bool
     */
    public $allVerified;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var results
     */
    public $results;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'agentRegisterInfoId' => 'AgentRegisterInfoId',
        'agentStatus' => 'AgentStatus',
        'allVerified' => 'AllVerified',
        'requestId' => 'RequestId',
        'results' => 'Results',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->accessDeniedDetail) {
            $this->accessDeniedDetail->validate();
        }
        if (null !== $this->results) {
            $this->results->validate();
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

        if (null !== $this->agentStatus) {
            $res['AgentStatus'] = $this->agentStatus;
        }

        if (null !== $this->allVerified) {
            $res['AllVerified'] = $this->allVerified;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->results) {
            $res['Results'] = null !== $this->results ? $this->results->toArray($noStream) : $this->results;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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

        if (isset($map['AgentStatus'])) {
            $model->agentStatus = $map['AgentStatus'];
        }

        if (isset($map['AllVerified'])) {
            $model->allVerified = $map['AllVerified'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Results'])) {
            $model->results = results::fromMap($map['Results']);
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
