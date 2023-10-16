<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\ListNotaryOrdersResponseBody\data;

use AlibabaCloud\Tea\Model;

class notaryOrder extends Model
{
    /**
     * @var string
     */
    public $aliyunOrderId;

    /**
     * @var string
     */
    public $applyPostStatus;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $notaryCertificate;

    /**
     * @var int
     */
    public $notaryOrderId;

    /**
     * @var string
     */
    public $notaryPlatformName;

    /**
     * @var int
     */
    public $notaryStatus;

    /**
     * @var int
     */
    public $notaryType;

    /**
     * @var int
     */
    public $orderDate;

    /**
     * @var float
     */
    public $orderPrice;

    /**
     * @var string
     */
    public $tmClassification;

    /**
     * @var string
     */
    public $tmImage;

    /**
     * @var string
     */
    public $tmName;

    /**
     * @var string
     */
    public $tmRegisterNo;
    protected $_name = [
        'aliyunOrderId'      => 'AliyunOrderId',
        'applyPostStatus'    => 'ApplyPostStatus',
        'bizId'              => 'BizId',
        'gmtModified'        => 'GmtModified',
        'notaryCertificate'  => 'NotaryCertificate',
        'notaryOrderId'      => 'NotaryOrderId',
        'notaryPlatformName' => 'NotaryPlatformName',
        'notaryStatus'       => 'NotaryStatus',
        'notaryType'         => 'NotaryType',
        'orderDate'          => 'OrderDate',
        'orderPrice'         => 'OrderPrice',
        'tmClassification'   => 'TmClassification',
        'tmImage'            => 'TmImage',
        'tmName'             => 'TmName',
        'tmRegisterNo'       => 'TmRegisterNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunOrderId) {
            $res['AliyunOrderId'] = $this->aliyunOrderId;
        }
        if (null !== $this->applyPostStatus) {
            $res['ApplyPostStatus'] = $this->applyPostStatus;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->notaryCertificate) {
            $res['NotaryCertificate'] = $this->notaryCertificate;
        }
        if (null !== $this->notaryOrderId) {
            $res['NotaryOrderId'] = $this->notaryOrderId;
        }
        if (null !== $this->notaryPlatformName) {
            $res['NotaryPlatformName'] = $this->notaryPlatformName;
        }
        if (null !== $this->notaryStatus) {
            $res['NotaryStatus'] = $this->notaryStatus;
        }
        if (null !== $this->notaryType) {
            $res['NotaryType'] = $this->notaryType;
        }
        if (null !== $this->orderDate) {
            $res['OrderDate'] = $this->orderDate;
        }
        if (null !== $this->orderPrice) {
            $res['OrderPrice'] = $this->orderPrice;
        }
        if (null !== $this->tmClassification) {
            $res['TmClassification'] = $this->tmClassification;
        }
        if (null !== $this->tmImage) {
            $res['TmImage'] = $this->tmImage;
        }
        if (null !== $this->tmName) {
            $res['TmName'] = $this->tmName;
        }
        if (null !== $this->tmRegisterNo) {
            $res['TmRegisterNo'] = $this->tmRegisterNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notaryOrder
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunOrderId'])) {
            $model->aliyunOrderId = $map['AliyunOrderId'];
        }
        if (isset($map['ApplyPostStatus'])) {
            $model->applyPostStatus = $map['ApplyPostStatus'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['NotaryCertificate'])) {
            $model->notaryCertificate = $map['NotaryCertificate'];
        }
        if (isset($map['NotaryOrderId'])) {
            $model->notaryOrderId = $map['NotaryOrderId'];
        }
        if (isset($map['NotaryPlatformName'])) {
            $model->notaryPlatformName = $map['NotaryPlatformName'];
        }
        if (isset($map['NotaryStatus'])) {
            $model->notaryStatus = $map['NotaryStatus'];
        }
        if (isset($map['NotaryType'])) {
            $model->notaryType = $map['NotaryType'];
        }
        if (isset($map['OrderDate'])) {
            $model->orderDate = $map['OrderDate'];
        }
        if (isset($map['OrderPrice'])) {
            $model->orderPrice = $map['OrderPrice'];
        }
        if (isset($map['TmClassification'])) {
            $model->tmClassification = $map['TmClassification'];
        }
        if (isset($map['TmImage'])) {
            $model->tmImage = $map['TmImage'];
        }
        if (isset($map['TmName'])) {
            $model->tmName = $map['TmName'];
        }
        if (isset($map['TmRegisterNo'])) {
            $model->tmRegisterNo = $map['TmRegisterNo'];
        }

        return $model;
    }
}
