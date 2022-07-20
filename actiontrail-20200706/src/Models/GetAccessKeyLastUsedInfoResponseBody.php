<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Tea\Model;

class GetAccessKeyLastUsedInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $ownerId;

    /**
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
    public $serviceNameCn;

    /**
     * @var string
     */
    public $serviceNameEn;

    /**
     * @var string
     */
    public $source;

    /**
     * @var int
     */
    public $usedTimestamp;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'accessKeyId'   => 'AccessKeyId',
        'accountId'     => 'AccountId',
        'accountType'   => 'AccountType',
        'detail'        => 'Detail',
        'ownerId'       => 'OwnerId',
        'requestId'     => 'RequestId',
        'serviceName'   => 'ServiceName',
        'serviceNameCn' => 'ServiceNameCn',
        'serviceNameEn' => 'ServiceNameEn',
        'source'        => 'Source',
        'usedTimestamp' => 'UsedTimestamp',
        'userName'      => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->serviceNameCn) {
            $res['ServiceNameCn'] = $this->serviceNameCn;
        }
        if (null !== $this->serviceNameEn) {
            $res['ServiceNameEn'] = $this->serviceNameEn;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->usedTimestamp) {
            $res['UsedTimestamp'] = $this->usedTimestamp;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccessKeyLastUsedInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceNameCn'])) {
            $model->serviceNameCn = $map['ServiceNameCn'];
        }
        if (isset($map['ServiceNameEn'])) {
            $model->serviceNameEn = $map['ServiceNameEn'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['UsedTimestamp'])) {
            $model->usedTimestamp = $map['UsedTimestamp'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
