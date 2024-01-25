<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeStoresResponseBody;

use AlibabaCloud\Tea\Model;

class stores extends Model
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
     * @example 2020-03-06T02:58:16Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2020-03-06T02:58:16Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $level;

    /**
     * @example s-aasx****
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
        'gmtCreate'            => 'GmtCreate',
        'gmtModified'          => 'GmtModified',
        'level'                => 'Level',
        'parentId'             => 'ParentId',
        'phone'                => 'Phone',
        'storeId'              => 'StoreId',
        'storeName'            => 'StoreName',
        'templateVersion'      => 'TemplateVersion',
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
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
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
     * @return stores
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
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
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
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }
        if (isset($map['UserStoreCode'])) {
            $model->userStoreCode = $map['UserStoreCode'];
        }

        return $model;
    }
}
