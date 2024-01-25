<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models;

use AlibabaCloud\Tea\Model;

class CreateStoreRequest extends Model
{
    /**
     * @var int
     */
    public $autoUnbindDays;

    /**
     * @var bool
     */
    public $autoUnbindOfflineEsl;

    /**
     * @example 0
     *
     * @var int
     */
    public $barCodeEncode;

    /**
     * @example 1212
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example {}
     *
     * @var string
     */
    public $extraParams;

    /**
     * @example s-dxsxx****
     *
     * @var string
     */
    public $parentId;

    /**
     * @example 0571-5666888
     *
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $storeName;

    /**
     * @example GMT+08:00
     *
     * @var string
     */
    public $timeZone;

    /**
     * @example 20200201
     *
     * @var string
     */
    public $userStoreCode;
    protected $_name = [
        'autoUnbindDays'       => 'AutoUnbindDays',
        'autoUnbindOfflineEsl' => 'AutoUnbindOfflineEsl',
        'barCodeEncode'        => 'BarCodeEncode',
        'clientToken'          => 'ClientToken',
        'extraParams'          => 'ExtraParams',
        'parentId'             => 'ParentId',
        'phone'                => 'Phone',
        'storeName'            => 'StoreName',
        'timeZone'             => 'TimeZone',
        'userStoreCode'        => 'UserStoreCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoUnbindDays) {
            $res['AutoUnbindDays'] = $this->autoUnbindDays;
        }
        if (null !== $this->autoUnbindOfflineEsl) {
            $res['AutoUnbindOfflineEsl'] = $this->autoUnbindOfflineEsl;
        }
        if (null !== $this->barCodeEncode) {
            $res['BarCodeEncode'] = $this->barCodeEncode;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->extraParams) {
            $res['ExtraParams'] = $this->extraParams;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->storeName) {
            $res['StoreName'] = $this->storeName;
        }
        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }
        if (null !== $this->userStoreCode) {
            $res['UserStoreCode'] = $this->userStoreCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStoreRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoUnbindDays'])) {
            $model->autoUnbindDays = $map['AutoUnbindDays'];
        }
        if (isset($map['AutoUnbindOfflineEsl'])) {
            $model->autoUnbindOfflineEsl = $map['AutoUnbindOfflineEsl'];
        }
        if (isset($map['BarCodeEncode'])) {
            $model->barCodeEncode = $map['BarCodeEncode'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ExtraParams'])) {
            $model->extraParams = $map['ExtraParams'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['StoreName'])) {
            $model->storeName = $map['StoreName'];
        }
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }
        if (isset($map['UserStoreCode'])) {
            $model->userStoreCode = $map['UserStoreCode'];
        }

        return $model;
    }
}
