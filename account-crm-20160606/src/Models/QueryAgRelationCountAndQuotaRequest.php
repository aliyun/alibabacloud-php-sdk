<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class QueryAgRelationCountAndQuotaRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $callerBid;

    /**
     * @var int
     */
    public $callerParentId;

    /**
     * @var string
     */
    public $callerType;

    /**
     * @var int
     */
    public $callerUid;

    /**
     * @var string
     */
    public $mpk;

    /**
     * @var bool
     */
    public $nullObject;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $stsTokenCallerBid;

    /**
     * @var int
     */
    public $stsTokenCallerUid;

    /**
     * @var int
     */
    public $stsTokenRoleId;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'appName' => 'AppName',
        'callerBid' => 'CallerBid',
        'callerParentId' => 'CallerParentId',
        'callerType' => 'CallerType',
        'callerUid' => 'CallerUid',
        'mpk' => 'Mpk',
        'nullObject' => 'NullObject',
        'requestId' => 'RequestId',
        'securityToken' => 'SecurityToken',
        'sourceIp' => 'SourceIp',
        'stsTokenCallerBid' => 'StsTokenCallerBid',
        'stsTokenCallerUid' => 'StsTokenCallerUid',
        'stsTokenRoleId' => 'StsTokenRoleId',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->callerBid) {
            $res['CallerBid'] = $this->callerBid;
        }

        if (null !== $this->callerParentId) {
            $res['CallerParentId'] = $this->callerParentId;
        }

        if (null !== $this->callerType) {
            $res['CallerType'] = $this->callerType;
        }

        if (null !== $this->callerUid) {
            $res['CallerUid'] = $this->callerUid;
        }

        if (null !== $this->mpk) {
            $res['Mpk'] = $this->mpk;
        }

        if (null !== $this->nullObject) {
            $res['NullObject'] = $this->nullObject;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        if (null !== $this->stsTokenCallerBid) {
            $res['StsTokenCallerBid'] = $this->stsTokenCallerBid;
        }

        if (null !== $this->stsTokenCallerUid) {
            $res['StsTokenCallerUid'] = $this->stsTokenCallerUid;
        }

        if (null !== $this->stsTokenRoleId) {
            $res['StsTokenRoleId'] = $this->stsTokenRoleId;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['CallerBid'])) {
            $model->callerBid = $map['CallerBid'];
        }

        if (isset($map['CallerParentId'])) {
            $model->callerParentId = $map['CallerParentId'];
        }

        if (isset($map['CallerType'])) {
            $model->callerType = $map['CallerType'];
        }

        if (isset($map['CallerUid'])) {
            $model->callerUid = $map['CallerUid'];
        }

        if (isset($map['Mpk'])) {
            $model->mpk = $map['Mpk'];
        }

        if (isset($map['NullObject'])) {
            $model->nullObject = $map['NullObject'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['StsTokenCallerBid'])) {
            $model->stsTokenCallerBid = $map['StsTokenCallerBid'];
        }

        if (isset($map['StsTokenCallerUid'])) {
            $model->stsTokenCallerUid = $map['StsTokenCallerUid'];
        }

        if (isset($map['StsTokenRoleId'])) {
            $model->stsTokenRoleId = $map['StsTokenRoleId'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
