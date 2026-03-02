<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;

class GetRiskCountResponseBody extends Model
{
    /**
     * @var int
     */
    public $aliyunAssetCertificateExpiredCount;

    /**
     * @var int
     */
    public $aliyunAssetCertificateWillExpiredCount;

    /**
     * @var int
     */
    public $buyCertificateExpireCount;

    /**
     * @var int
     */
    public $buyCertificateNotDeploymentCount;

    /**
     * @var int
     */
    public $buyCertificateNotTrusteeCount;

    /**
     * @var int
     */
    public $buyCertificateWillExpiredCount;

    /**
     * @var int
     */
    public $buyCheckedFailCount;

    /**
     * @var int
     */
    public $domainAssetNotMonitorCount;

    /**
     * @var int
     */
    public $freeCertificateExpireCount;

    /**
     * @var int
     */
    public $freeCertificateNotDeploymentCount;

    /**
     * @var int
     */
    public $freeCertificateWillExpiredCount;

    /**
     * @var int
     */
    public $freeCheckedFailCount;

    /**
     * @var int
     */
    public $multiCloudAssetCertificateExpiredCount;

    /**
     * @var int
     */
    public $multiCloudAssetCertificateWillExpiredCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $uploadCertificateExpireCount;

    /**
     * @var int
     */
    public $uploadCertificateNotDeploymentCount;

    /**
     * @var int
     */
    public $uploadCertificateNotNoticeCount;

    /**
     * @var int
     */
    public $uploadCertificateWillExpiredCount;
    protected $_name = [
        'aliyunAssetCertificateExpiredCount' => 'AliyunAssetCertificateExpiredCount',
        'aliyunAssetCertificateWillExpiredCount' => 'AliyunAssetCertificateWillExpiredCount',
        'buyCertificateExpireCount' => 'BuyCertificateExpireCount',
        'buyCertificateNotDeploymentCount' => 'BuyCertificateNotDeploymentCount',
        'buyCertificateNotTrusteeCount' => 'BuyCertificateNotTrusteeCount',
        'buyCertificateWillExpiredCount' => 'BuyCertificateWillExpiredCount',
        'buyCheckedFailCount' => 'BuyCheckedFailCount',
        'domainAssetNotMonitorCount' => 'DomainAssetNotMonitorCount',
        'freeCertificateExpireCount' => 'FreeCertificateExpireCount',
        'freeCertificateNotDeploymentCount' => 'FreeCertificateNotDeploymentCount',
        'freeCertificateWillExpiredCount' => 'FreeCertificateWillExpiredCount',
        'freeCheckedFailCount' => 'FreeCheckedFailCount',
        'multiCloudAssetCertificateExpiredCount' => 'MultiCloudAssetCertificateExpiredCount',
        'multiCloudAssetCertificateWillExpiredCount' => 'MultiCloudAssetCertificateWillExpiredCount',
        'requestId' => 'RequestId',
        'uploadCertificateExpireCount' => 'UploadCertificateExpireCount',
        'uploadCertificateNotDeploymentCount' => 'UploadCertificateNotDeploymentCount',
        'uploadCertificateNotNoticeCount' => 'UploadCertificateNotNoticeCount',
        'uploadCertificateWillExpiredCount' => 'UploadCertificateWillExpiredCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunAssetCertificateExpiredCount) {
            $res['AliyunAssetCertificateExpiredCount'] = $this->aliyunAssetCertificateExpiredCount;
        }

        if (null !== $this->aliyunAssetCertificateWillExpiredCount) {
            $res['AliyunAssetCertificateWillExpiredCount'] = $this->aliyunAssetCertificateWillExpiredCount;
        }

        if (null !== $this->buyCertificateExpireCount) {
            $res['BuyCertificateExpireCount'] = $this->buyCertificateExpireCount;
        }

        if (null !== $this->buyCertificateNotDeploymentCount) {
            $res['BuyCertificateNotDeploymentCount'] = $this->buyCertificateNotDeploymentCount;
        }

        if (null !== $this->buyCertificateNotTrusteeCount) {
            $res['BuyCertificateNotTrusteeCount'] = $this->buyCertificateNotTrusteeCount;
        }

        if (null !== $this->buyCertificateWillExpiredCount) {
            $res['BuyCertificateWillExpiredCount'] = $this->buyCertificateWillExpiredCount;
        }

        if (null !== $this->buyCheckedFailCount) {
            $res['BuyCheckedFailCount'] = $this->buyCheckedFailCount;
        }

        if (null !== $this->domainAssetNotMonitorCount) {
            $res['DomainAssetNotMonitorCount'] = $this->domainAssetNotMonitorCount;
        }

        if (null !== $this->freeCertificateExpireCount) {
            $res['FreeCertificateExpireCount'] = $this->freeCertificateExpireCount;
        }

        if (null !== $this->freeCertificateNotDeploymentCount) {
            $res['FreeCertificateNotDeploymentCount'] = $this->freeCertificateNotDeploymentCount;
        }

        if (null !== $this->freeCertificateWillExpiredCount) {
            $res['FreeCertificateWillExpiredCount'] = $this->freeCertificateWillExpiredCount;
        }

        if (null !== $this->freeCheckedFailCount) {
            $res['FreeCheckedFailCount'] = $this->freeCheckedFailCount;
        }

        if (null !== $this->multiCloudAssetCertificateExpiredCount) {
            $res['MultiCloudAssetCertificateExpiredCount'] = $this->multiCloudAssetCertificateExpiredCount;
        }

        if (null !== $this->multiCloudAssetCertificateWillExpiredCount) {
            $res['MultiCloudAssetCertificateWillExpiredCount'] = $this->multiCloudAssetCertificateWillExpiredCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->uploadCertificateExpireCount) {
            $res['UploadCertificateExpireCount'] = $this->uploadCertificateExpireCount;
        }

        if (null !== $this->uploadCertificateNotDeploymentCount) {
            $res['UploadCertificateNotDeploymentCount'] = $this->uploadCertificateNotDeploymentCount;
        }

        if (null !== $this->uploadCertificateNotNoticeCount) {
            $res['UploadCertificateNotNoticeCount'] = $this->uploadCertificateNotNoticeCount;
        }

        if (null !== $this->uploadCertificateWillExpiredCount) {
            $res['UploadCertificateWillExpiredCount'] = $this->uploadCertificateWillExpiredCount;
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
        if (isset($map['AliyunAssetCertificateExpiredCount'])) {
            $model->aliyunAssetCertificateExpiredCount = $map['AliyunAssetCertificateExpiredCount'];
        }

        if (isset($map['AliyunAssetCertificateWillExpiredCount'])) {
            $model->aliyunAssetCertificateWillExpiredCount = $map['AliyunAssetCertificateWillExpiredCount'];
        }

        if (isset($map['BuyCertificateExpireCount'])) {
            $model->buyCertificateExpireCount = $map['BuyCertificateExpireCount'];
        }

        if (isset($map['BuyCertificateNotDeploymentCount'])) {
            $model->buyCertificateNotDeploymentCount = $map['BuyCertificateNotDeploymentCount'];
        }

        if (isset($map['BuyCertificateNotTrusteeCount'])) {
            $model->buyCertificateNotTrusteeCount = $map['BuyCertificateNotTrusteeCount'];
        }

        if (isset($map['BuyCertificateWillExpiredCount'])) {
            $model->buyCertificateWillExpiredCount = $map['BuyCertificateWillExpiredCount'];
        }

        if (isset($map['BuyCheckedFailCount'])) {
            $model->buyCheckedFailCount = $map['BuyCheckedFailCount'];
        }

        if (isset($map['DomainAssetNotMonitorCount'])) {
            $model->domainAssetNotMonitorCount = $map['DomainAssetNotMonitorCount'];
        }

        if (isset($map['FreeCertificateExpireCount'])) {
            $model->freeCertificateExpireCount = $map['FreeCertificateExpireCount'];
        }

        if (isset($map['FreeCertificateNotDeploymentCount'])) {
            $model->freeCertificateNotDeploymentCount = $map['FreeCertificateNotDeploymentCount'];
        }

        if (isset($map['FreeCertificateWillExpiredCount'])) {
            $model->freeCertificateWillExpiredCount = $map['FreeCertificateWillExpiredCount'];
        }

        if (isset($map['FreeCheckedFailCount'])) {
            $model->freeCheckedFailCount = $map['FreeCheckedFailCount'];
        }

        if (isset($map['MultiCloudAssetCertificateExpiredCount'])) {
            $model->multiCloudAssetCertificateExpiredCount = $map['MultiCloudAssetCertificateExpiredCount'];
        }

        if (isset($map['MultiCloudAssetCertificateWillExpiredCount'])) {
            $model->multiCloudAssetCertificateWillExpiredCount = $map['MultiCloudAssetCertificateWillExpiredCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UploadCertificateExpireCount'])) {
            $model->uploadCertificateExpireCount = $map['UploadCertificateExpireCount'];
        }

        if (isset($map['UploadCertificateNotDeploymentCount'])) {
            $model->uploadCertificateNotDeploymentCount = $map['UploadCertificateNotDeploymentCount'];
        }

        if (isset($map['UploadCertificateNotNoticeCount'])) {
            $model->uploadCertificateNotNoticeCount = $map['UploadCertificateNotNoticeCount'];
        }

        if (isset($map['UploadCertificateWillExpiredCount'])) {
            $model->uploadCertificateWillExpiredCount = $map['UploadCertificateWillExpiredCount'];
        }

        return $model;
    }
}
