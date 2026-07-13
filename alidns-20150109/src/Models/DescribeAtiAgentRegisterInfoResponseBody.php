<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeAtiAgentRegisterInfoResponseBody\accessDeniedDetail;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeAtiAgentRegisterInfoResponseBody\endpoints;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeAtiAgentRegisterInfoResponseBody\rejectReason;

class DescribeAtiAgentRegisterInfoResponseBody extends Model
{
    /**
     * @var accessDeniedDetail
     */
    public $accessDeniedDetail;

    /**
     * @var string
     */
    public $agentDescription;

    /**
     * @var string
     */
    public $agentDisplayName;

    /**
     * @var string
     */
    public $agentHost;

    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentRegisterInfoId;

    /**
     * @var string
     */
    public $agentVersion;

    /**
     * @var string
     */
    public $atiName;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var endpoints
     */
    public $endpoints;

    /**
     * @var string
     */
    public $identityCertSerialNumber;

    /**
     * @var string
     */
    public $registrantId;

    /**
     * @var string
     */
    public $registrantName;

    /**
     * @var rejectReason
     */
    public $rejectReason;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $serverCertSerialNumber;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $trustCard;

    /**
     * @var string
     */
    public $trustCardUrl;

    /**
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'agentDescription' => 'AgentDescription',
        'agentDisplayName' => 'AgentDisplayName',
        'agentHost' => 'AgentHost',
        'agentId' => 'AgentId',
        'agentRegisterInfoId' => 'AgentRegisterInfoId',
        'agentVersion' => 'AgentVersion',
        'atiName' => 'AtiName',
        'createTimestamp' => 'CreateTimestamp',
        'endpoints' => 'Endpoints',
        'identityCertSerialNumber' => 'IdentityCertSerialNumber',
        'registrantId' => 'RegistrantId',
        'registrantName' => 'RegistrantName',
        'rejectReason' => 'RejectReason',
        'requestId' => 'RequestId',
        'serverCertSerialNumber' => 'ServerCertSerialNumber',
        'status' => 'Status',
        'trustCard' => 'TrustCard',
        'trustCardUrl' => 'TrustCardUrl',
        'updateTimestamp' => 'UpdateTimestamp',
    ];

    public function validate()
    {
        if (null !== $this->accessDeniedDetail) {
            $this->accessDeniedDetail->validate();
        }
        if (null !== $this->endpoints) {
            $this->endpoints->validate();
        }
        if (null !== $this->rejectReason) {
            $this->rejectReason->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = null !== $this->accessDeniedDetail ? $this->accessDeniedDetail->toArray($noStream) : $this->accessDeniedDetail;
        }

        if (null !== $this->agentDescription) {
            $res['AgentDescription'] = $this->agentDescription;
        }

        if (null !== $this->agentDisplayName) {
            $res['AgentDisplayName'] = $this->agentDisplayName;
        }

        if (null !== $this->agentHost) {
            $res['AgentHost'] = $this->agentHost;
        }

        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentRegisterInfoId) {
            $res['AgentRegisterInfoId'] = $this->agentRegisterInfoId;
        }

        if (null !== $this->agentVersion) {
            $res['AgentVersion'] = $this->agentVersion;
        }

        if (null !== $this->atiName) {
            $res['AtiName'] = $this->atiName;
        }

        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->endpoints) {
            $res['Endpoints'] = null !== $this->endpoints ? $this->endpoints->toArray($noStream) : $this->endpoints;
        }

        if (null !== $this->identityCertSerialNumber) {
            $res['IdentityCertSerialNumber'] = $this->identityCertSerialNumber;
        }

        if (null !== $this->registrantId) {
            $res['RegistrantId'] = $this->registrantId;
        }

        if (null !== $this->registrantName) {
            $res['RegistrantName'] = $this->registrantName;
        }

        if (null !== $this->rejectReason) {
            $res['RejectReason'] = null !== $this->rejectReason ? $this->rejectReason->toArray($noStream) : $this->rejectReason;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serverCertSerialNumber) {
            $res['ServerCertSerialNumber'] = $this->serverCertSerialNumber;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->trustCard) {
            $res['TrustCard'] = $this->trustCard;
        }

        if (null !== $this->trustCardUrl) {
            $res['TrustCardUrl'] = $this->trustCardUrl;
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

        if (isset($map['AgentDescription'])) {
            $model->agentDescription = $map['AgentDescription'];
        }

        if (isset($map['AgentDisplayName'])) {
            $model->agentDisplayName = $map['AgentDisplayName'];
        }

        if (isset($map['AgentHost'])) {
            $model->agentHost = $map['AgentHost'];
        }

        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AgentRegisterInfoId'])) {
            $model->agentRegisterInfoId = $map['AgentRegisterInfoId'];
        }

        if (isset($map['AgentVersion'])) {
            $model->agentVersion = $map['AgentVersion'];
        }

        if (isset($map['AtiName'])) {
            $model->atiName = $map['AtiName'];
        }

        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        if (isset($map['Endpoints'])) {
            $model->endpoints = endpoints::fromMap($map['Endpoints']);
        }

        if (isset($map['IdentityCertSerialNumber'])) {
            $model->identityCertSerialNumber = $map['IdentityCertSerialNumber'];
        }

        if (isset($map['RegistrantId'])) {
            $model->registrantId = $map['RegistrantId'];
        }

        if (isset($map['RegistrantName'])) {
            $model->registrantName = $map['RegistrantName'];
        }

        if (isset($map['RejectReason'])) {
            $model->rejectReason = rejectReason::fromMap($map['RejectReason']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ServerCertSerialNumber'])) {
            $model->serverCertSerialNumber = $map['ServerCertSerialNumber'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TrustCard'])) {
            $model->trustCard = $map['TrustCard'];
        }

        if (isset($map['TrustCardUrl'])) {
            $model->trustCardUrl = $map['TrustCardUrl'];
        }

        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }

        return $model;
    }
}
