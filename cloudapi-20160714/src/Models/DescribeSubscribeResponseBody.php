<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeSubscribeResponseBody extends Model
{
    /**
     * @var int
     */
    public $userId;

    /**
     * @var int
     */
    public $subscribeId;

    /**
     * @var int
     */
    public $subscribeStatus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $secret;

    /**
     * @var string
     */
    public $version;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $specsCode;

    /**
     * @var string
     */
    public $createdTime;
    protected $_name = [
        'userId'          => 'UserId',
        'subscribeId'     => 'SubscribeId',
        'subscribeStatus' => 'SubscribeStatus',
        'requestId'       => 'RequestId',
        'modifiedTime'    => 'ModifiedTime',
        'appKey'          => 'AppKey',
        'secret'          => 'Secret',
        'version'         => 'Version',
        'productId'       => 'ProductId',
        'userName'        => 'UserName',
        'specsCode'       => 'SpecsCode',
        'createdTime'     => 'CreatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->subscribeId) {
            $res['SubscribeId'] = $this->subscribeId;
        }
        if (null !== $this->subscribeStatus) {
            $res['SubscribeStatus'] = $this->subscribeStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->secret) {
            $res['Secret'] = $this->secret;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->specsCode) {
            $res['SpecsCode'] = $this->specsCode;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSubscribeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['SubscribeId'])) {
            $model->subscribeId = $map['SubscribeId'];
        }
        if (isset($map['SubscribeStatus'])) {
            $model->subscribeStatus = $map['SubscribeStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['Secret'])) {
            $model->secret = $map['Secret'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['SpecsCode'])) {
            $model->specsCode = $map['SpecsCode'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        return $model;
    }
}
