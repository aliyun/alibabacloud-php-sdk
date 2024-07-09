<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyCdsFileShareLinkRequest extends Model
{
    /**
     * @description The ID of the cloud disk.
     *
     * This parameter is required.
     * @example cn-shanghai+cds-135515****
     *
     * @var string
     */
    public $cdsId;

    /**
     * @description The description of the file sharing task. The description must be 0 to 1,024 characters in length.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to prohibit the download of the files that are being shared.
     *
     * Valid values:
     *
     *   false
     *
     * <!-- -->
     *
     *   true
     *
     * <!-- -->
     * @example false
     *
     * @var bool
     */
    public $disableDownload;

    /**
     * @description Specifies whether to prohibit the preview of the files that are being shared.
     *
     * Valid values:
     *
     *   true
     *
     * <!-- -->
     *
     *   false
     *
     * <!-- -->
     * @example false
     *
     * @var bool
     */
    public $disablePreview;

    /**
     * @description Specifies whether to prohibit the dump of the files that are being shared.
     *
     * Valid values:
     *
     *   false
     *
     * <!-- -->
     *
     *   true
     *
     * <!-- -->
     * @example false
     *
     * @var bool
     */
    public $disableSave;

    /**
     * @description The number of times that the shared files are downloaded. The value of this parameter must be equal to or greater than 0.
     *
     * @example 0
     *
     * @var int
     */
    public $downloadCount;

    /**
     * @description The limit on the number of times that the shared files can be downloaded. The value of this parameter must be equal to or greater than 0. The value 0 specifies that no limit is imposed on the number of times that the shared files can be downloaded.
     *
     * @example 0
     *
     * @var int
     */
    public $downloadLimit;

    /**
     * @description The time when the file sharing link expires. The value of this parameter follows the RFC 3339 standard. Example: "2020-06-28T11:33:00.000+08:00". If this parameter is set to "", the file sharing link never expires.
     *
     * @example 2022-07-20T06:30:22.365Z
     *
     * @var string
     */
    public $expiration;

    /**
     * @description The number of times that the shared files are previewed. The value of this parameter must be equal to or greater than 0.
     *
     * @example 0
     *
     * @var int
     */
    public $previewCount;

    /**
     * @description The limit on the number of times that the shared files can be previewed. The value of this parameter must be equal to or greater than 0. The value 0 specifies that no limit is imposed on the number of times that the shared files can be downloaded.
     *
     * @example 100
     *
     * @var int
     */
    public $previewLimit;

    /**
     * @description The number of times that the shared files are reported. The value of this parameter must be equal to or greater than 0.
     *
     * @example 0
     *
     * @var int
     */
    public $reportCount;

    /**
     * @description The number of times that the shared files are dumped. The value of this parameter must be equal to or greater than 0.
     *
     * @example 0
     *
     * @var int
     */
    public $saveCount;

    /**
     * @description The limit on the number of times that the shared files can be dumped. The value of this parameter must be equal to or greater than 0. The value 0 specifies that no limit is imposed on the number of times that the shared files can be downloaded.
     *
     * @example 100
     *
     * @var int
     */
    public $saveLimit;

    /**
     * @description The ID of the file sharing task.
     *
     * This parameter is required.
     * @example 7JQX1Fs****
     *
     * @var string
     */
    public $shareId;

    /**
     * @description The name of the file sharing task. If you do not configure this parameter, the sharing task name is the first ID that is returned in the file_id_list value.
     *
     * >  The sharing task name must be 0 to 128 characters in length.
     * @var string
     */
    public $shareName;

    /**
     * @description The length of the access code. Valid values: 6 to 8. Unit: bytes. If you leave this parameter empty or set it to null, no access code is required. If you use a token to share files, you do not need to configure this parameter. The access code can contain only visible ASCII characters.
     *
     * @example 12345678
     *
     * @var string
     */
    public $sharePwd;

    /**
     * @description The sharing status.
     *
     * Valid values:
     *
     *   disabled: The sharing task is canceled.
     *
     * <!-- -->
     *
     *   enabled: The sharing task is valid.
     *
     * <!-- -->
     * @example enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The number of times that the videos are previewed in the shared files. The value of this parameter must be equal to or greater than 0.
     *
     * @example 0
     *
     * @var int
     */
    public $videoPreviewCount;
    protected $_name = [
        'cdsId'             => 'CdsId',
        'description'       => 'Description',
        'disableDownload'   => 'DisableDownload',
        'disablePreview'    => 'DisablePreview',
        'disableSave'       => 'DisableSave',
        'downloadCount'     => 'DownloadCount',
        'downloadLimit'     => 'DownloadLimit',
        'expiration'        => 'Expiration',
        'previewCount'      => 'PreviewCount',
        'previewLimit'      => 'PreviewLimit',
        'reportCount'       => 'ReportCount',
        'saveCount'         => 'SaveCount',
        'saveLimit'         => 'SaveLimit',
        'shareId'           => 'ShareId',
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

    /**
     * @param array $map
     *
     * @return ModifyCdsFileShareLinkRequest
     */
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
