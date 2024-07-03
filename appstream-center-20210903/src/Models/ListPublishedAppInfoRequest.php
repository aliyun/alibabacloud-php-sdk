<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210903\Models;

use AlibabaCloud\Tea\Model;

class ListPublishedAppInfoRequest extends Model
{
    /**
     * @example Microsoft Word
     *
     * @var string
     */
    public $appName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bizRegionId;

    /**
     * @example 1
     *
     * @var int
     */
    public $categoryId;

    /**
     * @example 1
     *
     * @var int
     */
    public $categoryType;

    /**
     * @example 17b38aaa-761f-44c5-9862-2ad0f5025d15
     *
     * @var string
     */
    public $clientId;

    /**
     * @example 125.80.132.13
     *
     * @var string
     */
    public $clientIp;

    /**
     * @example windows_\\"Windows 10 Enterprise\\" 10.0 (Build 14393)
     *
     * @var string
     */
    public $clientOS;

    /**
     * @example 2.0.1-D-20211008.101607
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @example test.test
     *
     * @var string
     */
    public $endUserId;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $loginRegionId;

    /**
     * @example v189fa78c1aff77a0483b16497517322299131027b85bb84bbdc0871988ce8296d8fd891e2fdeaded3bd75f81f639acee8
     *
     * @var string
     */
    public $loginToken;

    /**
     * @var string
     */
    public $orderParam;

    /**
     * @example CloudApp
     *
     * @var string
     */
    public $productType;

    /**
     * @example c261a6a1-e242-4f4b-813c-5fe807e49f03
     *
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $sortType;
    protected $_name = [
        'appName'       => 'AppName',
        'bizRegionId'   => 'BizRegionId',
        'categoryId'    => 'CategoryId',
        'categoryType'  => 'CategoryType',
        'clientId'      => 'ClientId',
        'clientIp'      => 'ClientIp',
        'clientOS'      => 'ClientOS',
        'clientVersion' => 'ClientVersion',
        'endUserId'     => 'EndUserId',
        'loginRegionId' => 'LoginRegionId',
        'loginToken'    => 'LoginToken',
        'orderParam'    => 'OrderParam',
        'productType'   => 'ProductType',
        'sessionId'     => 'SessionId',
        'sortType'      => 'SortType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->categoryType) {
            $res['CategoryType'] = $this->categoryType;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->clientOS) {
            $res['ClientOS'] = $this->clientOS;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->loginRegionId) {
            $res['LoginRegionId'] = $this->loginRegionId;
        }
        if (null !== $this->loginToken) {
            $res['LoginToken'] = $this->loginToken;
        }
        if (null !== $this->orderParam) {
            $res['OrderParam'] = $this->orderParam;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->sortType) {
            $res['SortType'] = $this->sortType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPublishedAppInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CategoryType'])) {
            $model->categoryType = $map['CategoryType'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['ClientOS'])) {
            $model->clientOS = $map['ClientOS'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['LoginRegionId'])) {
            $model->loginRegionId = $map['LoginRegionId'];
        }
        if (isset($map['LoginToken'])) {
            $model->loginToken = $map['LoginToken'];
        }
        if (isset($map['OrderParam'])) {
            $model->orderParam = $map['OrderParam'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['SortType'])) {
            $model->sortType = $map['SortType'];
        }

        return $model;
    }
}
