<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models;

use AlibabaCloud\Tea\Model;

class UpdateStoreRequest extends Model
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
     * @example {}
     *
     * @var string
     */
    public $extraParams;

    /**
     * @example 0571-5666888
     *
     * @var string
     */
    public $phone;

    /**
     * @example s-dxsxx****
     *
     * @var string
     */
    public $storeId;

    /**
     * @var string
     */
    public $storeName;

    /**
     * @example 1.1.0
     *
     * @var string
     */
    public $templateVersion;

    /**
     * @example GMT+08:00
     *
     * @var string
     */
    public $timezone;

    /**
     * @example 123456
     *
     * @var string
     */
    public $userStoreCode;
    protected $_name = [
        'autoUnbindDays'       => 'AutoUnbindDays',
        'autoUnbindOfflineEsl' => 'AutoUnbindOfflineEsl',
        'barCodeEncode'        => 'BarCodeEncode',
        'extraParams'          => 'ExtraParams',
        'phone'                => 'Phone',
        'storeId'              => 'StoreId',
        'storeName'            => 'StoreName',
        'templateVersion'      => 'TemplateVersion',
        'timezone'             => 'Timezone',
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
        if (null !== $this->extraParams) {
            $res['ExtraParams'] = $this->extraParams;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }
        if (null !== $this->storeName) {
            $res['StoreName'] = $this->storeName;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
        }
        if (null !== $this->userStoreCode) {
            $res['UserStoreCode'] = $this->userStoreCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateStoreRequest
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
        if (isset($map['ExtraParams'])) {
            $model->extraParams = $map['ExtraParams'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }
        if (isset($map['StoreName'])) {
            $model->storeName = $map['StoreName'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }
        if (isset($map['UserStoreCode'])) {
            $model->userStoreCode = $map['UserStoreCode'];
        }

        return $model;
    }
}
