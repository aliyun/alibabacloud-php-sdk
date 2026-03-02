<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;

class GetAssetCountResponseBody extends Model
{
    /**
     * @var int
     */
    public $aliyunAssetCount;

    /**
     * @var int
     */
    public $awsAssetCount;

    /**
     * @var int
     */
    public $buyCertificateCount;

    /**
     * @var int
     */
    public $domainAssetCount;

    /**
     * @var int
     */
    public $freeCertificateCount;

    /**
     * @var int
     */
    public $huaweiAssetCount;

    /**
     * @var int
     */
    public $lastPoint;

    /**
     * @var int
     */
    public $point;

    /**
     * @var int
     */
    public $pointRatio;

    /**
     * @var int
     */
    public $pointTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $tencentAssetCount;

    /**
     * @var int
     */
    public $uploadCertificateCount;
    protected $_name = [
        'aliyunAssetCount' => 'AliyunAssetCount',
        'awsAssetCount' => 'AwsAssetCount',
        'buyCertificateCount' => 'BuyCertificateCount',
        'domainAssetCount' => 'DomainAssetCount',
        'freeCertificateCount' => 'FreeCertificateCount',
        'huaweiAssetCount' => 'HuaweiAssetCount',
        'lastPoint' => 'LastPoint',
        'point' => 'Point',
        'pointRatio' => 'PointRatio',
        'pointTime' => 'PointTime',
        'requestId' => 'RequestId',
        'tencentAssetCount' => 'TencentAssetCount',
        'uploadCertificateCount' => 'UploadCertificateCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunAssetCount) {
            $res['AliyunAssetCount'] = $this->aliyunAssetCount;
        }

        if (null !== $this->awsAssetCount) {
            $res['AwsAssetCount'] = $this->awsAssetCount;
        }

        if (null !== $this->buyCertificateCount) {
            $res['BuyCertificateCount'] = $this->buyCertificateCount;
        }

        if (null !== $this->domainAssetCount) {
            $res['DomainAssetCount'] = $this->domainAssetCount;
        }

        if (null !== $this->freeCertificateCount) {
            $res['FreeCertificateCount'] = $this->freeCertificateCount;
        }

        if (null !== $this->huaweiAssetCount) {
            $res['HuaweiAssetCount'] = $this->huaweiAssetCount;
        }

        if (null !== $this->lastPoint) {
            $res['LastPoint'] = $this->lastPoint;
        }

        if (null !== $this->point) {
            $res['Point'] = $this->point;
        }

        if (null !== $this->pointRatio) {
            $res['PointRatio'] = $this->pointRatio;
        }

        if (null !== $this->pointTime) {
            $res['PointTime'] = $this->pointTime;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tencentAssetCount) {
            $res['TencentAssetCount'] = $this->tencentAssetCount;
        }

        if (null !== $this->uploadCertificateCount) {
            $res['UploadCertificateCount'] = $this->uploadCertificateCount;
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
        if (isset($map['AliyunAssetCount'])) {
            $model->aliyunAssetCount = $map['AliyunAssetCount'];
        }

        if (isset($map['AwsAssetCount'])) {
            $model->awsAssetCount = $map['AwsAssetCount'];
        }

        if (isset($map['BuyCertificateCount'])) {
            $model->buyCertificateCount = $map['BuyCertificateCount'];
        }

        if (isset($map['DomainAssetCount'])) {
            $model->domainAssetCount = $map['DomainAssetCount'];
        }

        if (isset($map['FreeCertificateCount'])) {
            $model->freeCertificateCount = $map['FreeCertificateCount'];
        }

        if (isset($map['HuaweiAssetCount'])) {
            $model->huaweiAssetCount = $map['HuaweiAssetCount'];
        }

        if (isset($map['LastPoint'])) {
            $model->lastPoint = $map['LastPoint'];
        }

        if (isset($map['Point'])) {
            $model->point = $map['Point'];
        }

        if (isset($map['PointRatio'])) {
            $model->pointRatio = $map['PointRatio'];
        }

        if (isset($map['PointTime'])) {
            $model->pointTime = $map['PointTime'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TencentAssetCount'])) {
            $model->tencentAssetCount = $map['TencentAssetCount'];
        }

        if (isset($map['UploadCertificateCount'])) {
            $model->uploadCertificateCount = $map['UploadCertificateCount'];
        }

        return $model;
    }
}
