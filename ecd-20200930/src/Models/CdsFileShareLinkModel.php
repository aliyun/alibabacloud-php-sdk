<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CdsFileShareLinkModel extends Model
{
    /**
     * @var int
     */
    public $accessCount;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

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
    public $driveId;

    /**
     * @var string
     */
    public $expiration;

    /**
     * @var bool
     */
    public $expired;

    /**
     * @var string
     */
    public $fileIds;

    /**
     * @var string
     */
    public $modifiyTime;

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
    public $shareLink;

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
        'accessCount'       => 'AccessCount',
        'createTime'        => 'CreateTime',
        'creator'           => 'Creator',
        'description'       => 'Description',
        'disableDownload'   => 'DisableDownload',
        'disablePreview'    => 'DisablePreview',
        'disableSave'       => 'DisableSave',
        'downloadCount'     => 'DownloadCount',
        'downloadLimit'     => 'DownloadLimit',
        'driveId'           => 'DriveId',
        'expiration'        => 'Expiration',
        'expired'           => 'Expired',
        'fileIds'           => 'FileIds',
        'modifiyTime'       => 'ModifiyTime',
        'previewCount'      => 'PreviewCount',
        'previewLimit'      => 'PreviewLimit',
        'reportCount'       => 'ReportCount',
        'saveCount'         => 'SaveCount',
        'saveLimit'         => 'SaveLimit',
        'shareId'           => 'ShareId',
        'shareLink'         => 'ShareLink',
        'shareName'         => 'ShareName',
        'sharePwd'          => 'SharePwd',
        'status'            => 'Status',
        'videoPreviewCount' => 'VideoPreviewCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessCount) {
            $res['AccessCount'] = $this->accessCount;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
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
        if (null !== $this->driveId) {
            $res['DriveId'] = $this->driveId;
        }
        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->fileIds) {
            $res['FileIds'] = $this->fileIds;
        }
        if (null !== $this->modifiyTime) {
            $res['ModifiyTime'] = $this->modifiyTime;
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
        if (null !== $this->shareLink) {
            $res['ShareLink'] = $this->shareLink;
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

    /**
     * @param array $map
     *
     * @return CdsFileShareLinkModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessCount'])) {
            $model->accessCount = $map['AccessCount'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
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
        if (isset($map['DriveId'])) {
            $model->driveId = $map['DriveId'];
        }
        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['FileIds'])) {
            $model->fileIds = $map['FileIds'];
        }
        if (isset($map['ModifiyTime'])) {
            $model->modifiyTime = $map['ModifiyTime'];
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
        if (isset($map['ShareLink'])) {
            $model->shareLink = $map['ShareLink'];
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
