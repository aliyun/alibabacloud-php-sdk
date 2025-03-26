<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ModifyCdsFileShareLinkRequest extends Model
{
    /**
     * @var string
     */
    public $cdsId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $disableDownload;

    /**
     * @var bool
     */
    public $disablePreview;

    /**
     * @var bool
     */
    public $disableSave;

    /**
     * @var int
     */
    public $downloadCount;

    /**
     * @var int
     */
    public $downloadLimit;

    /**
     * @var string
     */
    public $expiration;

    /**
     * @var int
     */
    public $previewCount;

    /**
     * @var int
     */
    public $previewLimit;

    /**
     * @var int
     */
    public $reportCount;

    /**
     * @var int
     */
    public $saveCount;

    /**
     * @var int
     */
    public $saveLimit;

    /**
     * @var string
     */
    public $shareId;

    /**
     * @var string
     */
    public $shareName;

    /**
     * @var string
     */
    public $sharePwd;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $videoPreviewCount;
    protected $_name = [
        'cdsId' => 'CdsId',
        'description' => 'Description',
        'disableDownload' => 'DisableDownload',
        'disablePreview' => 'DisablePreview',
        'disableSave' => 'DisableSave',
        'downloadCount' => 'DownloadCount',
        'downloadLimit' => 'DownloadLimit',
        'expiration' => 'Expiration',
        'previewCount' => 'PreviewCount',
        'previewLimit' => 'PreviewLimit',
        'reportCount' => 'ReportCount',
        'saveCount' => 'SaveCount',
        'saveLimit' => 'SaveLimit',
        'shareId' => 'ShareId',
        'shareName' => 'ShareName',
        'sharePwd' => 'SharePwd',
        'status' => 'Status',
        'videoPreviewCount' => 'VideoPreviewCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->disableDownload) {
            $res['DisableDownload'] = $this->disableDownload;
        }

        if (null !== $this->disablePreview) {
            $res['DisablePreview'] = $this->disablePreview;
        }

        if (null !== $this->disableSave) {
            $res['DisableSave'] = $this->disableSave;
        }

        if (null !== $this->downloadCount) {
            $res['DownloadCount'] = $this->downloadCount;
        }

        if (null !== $this->downloadLimit) {
            $res['DownloadLimit'] = $this->downloadLimit;
        }

        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }

        if (null !== $this->previewCount) {
            $res['PreviewCount'] = $this->previewCount;
        }

        if (null !== $this->previewLimit) {
            $res['PreviewLimit'] = $this->previewLimit;
        }

        if (null !== $this->reportCount) {
            $res['ReportCount'] = $this->reportCount;
        }

        if (null !== $this->saveCount) {
            $res['SaveCount'] = $this->saveCount;
        }

        if (null !== $this->saveLimit) {
            $res['SaveLimit'] = $this->saveLimit;
        }

        if (null !== $this->shareId) {
            $res['ShareId'] = $this->shareId;
        }

        if (null !== $this->shareName) {
            $res['ShareName'] = $this->shareName;
        }

        if (null !== $this->sharePwd) {
            $res['SharePwd'] = $this->sharePwd;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->videoPreviewCount) {
            $res['VideoPreviewCount'] = $this->videoPreviewCount;
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
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisableDownload'])) {
            $model->disableDownload = $map['DisableDownload'];
        }

        if (isset($map['DisablePreview'])) {
            $model->disablePreview = $map['DisablePreview'];
        }

        if (isset($map['DisableSave'])) {
            $model->disableSave = $map['DisableSave'];
        }

        if (isset($map['DownloadCount'])) {
            $model->downloadCount = $map['DownloadCount'];
        }

        if (isset($map['DownloadLimit'])) {
            $model->downloadLimit = $map['DownloadLimit'];
        }

        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }

        if (isset($map['PreviewCount'])) {
            $model->previewCount = $map['PreviewCount'];
        }

        if (isset($map['PreviewLimit'])) {
            $model->previewLimit = $map['PreviewLimit'];
        }

        if (isset($map['ReportCount'])) {
            $model->reportCount = $map['ReportCount'];
        }

        if (isset($map['SaveCount'])) {
            $model->saveCount = $map['SaveCount'];
        }

        if (isset($map['SaveLimit'])) {
            $model->saveLimit = $map['SaveLimit'];
        }

        if (isset($map['ShareId'])) {
            $model->shareId = $map['ShareId'];
        }

        if (isset($map['ShareName'])) {
            $model->shareName = $map['ShareName'];
        }

        if (isset($map['SharePwd'])) {
            $model->sharePwd = $map['SharePwd'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['VideoPreviewCount'])) {
            $model->videoPreviewCount = $map['VideoPreviewCount'];
        }

        return $model;
    }
}
