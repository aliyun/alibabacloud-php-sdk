<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models\QueryAppInfoResponseBody;

use AlibabaCloud\Dara\Model;

class appInfo extends Model
{
    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $bundleId;

    /**
     * @var bool
     */
    public $certDevelopAvail;

    /**
     * @var string
     */
    public $certDevelopExpiration;

    /**
     * @var bool
     */
    public $certProductAvail;

    /**
     * @var string
     */
    public $certProductExpiration;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $encodedIcon;

    /**
     * @var int
     */
    public $industryId;

    /**
     * @var string
     */
    public $packageName;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var bool
     */
    public $readonly;

    /**
     * @var int
     */
    public $status;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
