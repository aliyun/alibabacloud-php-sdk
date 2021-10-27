<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class InitDeviceRequest extends Model
{
    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $bizData;

    /**
     * @var string
     */
    public $certifyId;

    /**
     * @var string
     */
    public $certifyPrincipal;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $deviceToken;

    /**
     * @var string
     */
    public $merchant;

    /**
     * @var string
     */
    public $metaInfo;

    /**
     * @var string
     */
    public $outerOrderNo;

    /**
     * @var string
     */
    public $produceNode;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $uaToken;

    /**
     * @var string
     */
    public $webUmidToken;
    protected $_name = [
        'appVersion'       => 'AppVersion',
        'bizData'          => 'BizData',
        'certifyId'        => 'CertifyId',
        'certifyPrincipal' => 'CertifyPrincipal',
        'channel'          => 'Channel',
        'deviceToken'      => 'DeviceToken',
        'merchant'         => 'Merchant',
        'metaInfo'         => 'MetaInfo',
        'outerOrderNo'     => 'OuterOrderNo',
        'produceNode'      => 'ProduceNode',
        'productName'      => 'ProductName',
        'uaToken'          => 'UaToken',
        'webUmidToken'     => 'WebUmidToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->bizData) {
            $res['BizData'] = $this->bizData;
        }
        if (null !== $this->certifyId) {
            $res['CertifyId'] = $this->certifyId;
        }
        if (null !== $this->certifyPrincipal) {
            $res['CertifyPrincipal'] = $this->certifyPrincipal;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->deviceToken) {
            $res['DeviceToken'] = $this->deviceToken;
        }
        if (null !== $this->merchant) {
            $res['Merchant'] = $this->merchant;
        }
        if (null !== $this->metaInfo) {
            $res['MetaInfo'] = $this->metaInfo;
        }
        if (null !== $this->outerOrderNo) {
            $res['OuterOrderNo'] = $this->outerOrderNo;
        }
        if (null !== $this->produceNode) {
            $res['ProduceNode'] = $this->produceNode;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->uaToken) {
            $res['UaToken'] = $this->uaToken;
        }
        if (null !== $this->webUmidToken) {
            $res['WebUmidToken'] = $this->webUmidToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InitDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['BizData'])) {
            $model->bizData = $map['BizData'];
        }
        if (isset($map['CertifyId'])) {
            $model->certifyId = $map['CertifyId'];
        }
        if (isset($map['CertifyPrincipal'])) {
            $model->certifyPrincipal = $map['CertifyPrincipal'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['DeviceToken'])) {
            $model->deviceToken = $map['DeviceToken'];
        }
        if (isset($map['Merchant'])) {
            $model->merchant = $map['Merchant'];
        }
        if (isset($map['MetaInfo'])) {
            $model->metaInfo = $map['MetaInfo'];
        }
        if (isset($map['OuterOrderNo'])) {
            $model->outerOrderNo = $map['OuterOrderNo'];
        }
        if (isset($map['ProduceNode'])) {
            $model->produceNode = $map['ProduceNode'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['UaToken'])) {
            $model->uaToken = $map['UaToken'];
        }
        if (isset($map['WebUmidToken'])) {
            $model->webUmidToken = $map['WebUmidToken'];
        }

        return $model;
    }
}
