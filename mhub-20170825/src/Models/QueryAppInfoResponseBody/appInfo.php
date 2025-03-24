<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models\QueryAppInfoResponseBody;

use AlibabaCloud\Tea\Model;

class appInfo extends Model
{
    /**
     * @example 123456
     *
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $appName;

    /**
     * @example com.test.ios
     *
     * @var string
     */
    public $bundleId;

    /**
     * @example false
     *
     * @var bool
     */
    public $certDevelopAvail;

    /**
     * @example 2020-12-16T06:25:52Z
     *
     * @var string
     */
    public $certDevelopExpiration;

    /**
     * @example false
     *
     * @var bool
     */
    public $certProductAvail;

    /**
     * @example 2020-12-16T06:25:52Z
     *
     * @var string
     */
    public $certProductExpiration;

    /**
     * @example 2020-12-16T06:25:52Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $encodedIcon;

    /**
     * @example 1
     *
     * @var int
     */
    public $industryId;

    /**
     * @example com.test.android
     *
     * @var string
     */
    public $packageName;

    /**
     * @example 1234
     *
     * @var int
     */
    public $productId;

    /**
     * @example false
     *
     * @var bool
     */
    public $readonly;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'appKey' => 'AppKey',
        'appName' => 'AppName',
        'bundleId' => 'BundleId',
        'certDevelopAvail' => 'CertDevelopAvail',
        'certDevelopExpiration' => 'CertDevelopExpiration',
        'certProductAvail' => 'CertProductAvail',
        'certProductExpiration' => 'CertProductExpiration',
        'createTime' => 'CreateTime',
        'encodedIcon' => 'EncodedIcon',
        'industryId' => 'IndustryId',
        'packageName' => 'PackageName',
        'productId' => 'ProductId',
        'readonly' => 'Readonly',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }
        if (null !== $this->certDevelopAvail) {
            $res['CertDevelopAvail'] = $this->certDevelopAvail;
        }
        if (null !== $this->certDevelopExpiration) {
            $res['CertDevelopExpiration'] = $this->certDevelopExpiration;
        }
        if (null !== $this->certProductAvail) {
            $res['CertProductAvail'] = $this->certProductAvail;
        }
        if (null !== $this->certProductExpiration) {
            $res['CertProductExpiration'] = $this->certProductExpiration;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->encodedIcon) {
            $res['EncodedIcon'] = $this->encodedIcon;
        }
        if (null !== $this->industryId) {
            $res['IndustryId'] = $this->industryId;
        }
        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->readonly) {
            $res['Readonly'] = $this->readonly;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }
        if (isset($map['CertDevelopAvail'])) {
            $model->certDevelopAvail = $map['CertDevelopAvail'];
        }
        if (isset($map['CertDevelopExpiration'])) {
            $model->certDevelopExpiration = $map['CertDevelopExpiration'];
        }
        if (isset($map['CertProductAvail'])) {
            $model->certProductAvail = $map['CertProductAvail'];
        }
        if (isset($map['CertProductExpiration'])) {
            $model->certProductExpiration = $map['CertProductExpiration'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EncodedIcon'])) {
            $model->encodedIcon = $map['EncodedIcon'];
        }
        if (isset($map['IndustryId'])) {
            $model->industryId = $map['IndustryId'];
        }
        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['Readonly'])) {
            $model->readonly = $map['Readonly'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
