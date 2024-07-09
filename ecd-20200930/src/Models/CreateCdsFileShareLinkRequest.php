<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateCdsFileShareLinkRequest extends Model
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
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to prohibit the download of the files that are being shared.
     *
     * Valid values:
     *
     *   true
     *
     * .
     *
     *   false
     *
     * .
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
     * .
     *
     *   false
     *
     * .
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
     *   true
     *
     * .
     *
     *   false
     *
     * .
     * @example false
     *
     * @var bool
     */
    public $disableSave;

    /**
     * @description The limit on the number of times that the shared files can be downloaded. The value of this parameter must be equal to or greater than 0. The value 0 specifies that no limit is imposed on the number of times that the shared files can be downloaded.
     *
     * @example 100
     *
     * @var int
     */
    public $downloadLimit;

    /**
     * @description The ID of the end user.
     *
     * @example user01
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The time when the file sharing link expires. The value of this parameter follows the RFC 3339 standard. Example: "2020-06-28T11:33:00.000+08:00". If this parameter is set to "", the file sharing link never expires.
     *
     * @example 2020-06-28T11:33:00.000+08:00
     *
     * @var string
     */
    public $expiration;

    /**
     * @description The file IDs.
     *
     * @var string[]
     */
    public $fileIds;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @description The limit on the number of times that the shared files can be previewed. The value of this parameter must be equal to or greater than 0. The value 0 specifies that no limit is imposed on the number of times that the shared files can be previewed.
     *
     * @example 100
     *
     * @var int
     */
    public $previewLimit;

    /**
     * @description The limit on the number of times that the shared files can be dumped. The value of this parameter must be equal to or greater than 0. The value 0 specifies that no limit is imposed on the number of times that the shared files can be dumped.
     *
     * @example 100
     *
     * @var int
     */
    public $saveLimit;

    /**
     * @description The name of the file sharing task. If you leave this parameter empty, the file name that corresponds to the first ID in the file ID list is used. The name must be 0 to 128 characters in length.
     *
     * @example view.txt
     *
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
    protected $_name = [
        'cdsId'           => 'CdsId',
        'description'     => 'Description',
        'disableDownload' => 'DisableDownload',
        'disablePreview'  => 'DisablePreview',
        'disableSave'     => 'DisableSave',
        'downloadLimit'   => 'DownloadLimit',
        'endUserId'       => 'EndUserId',
        'expiration'      => 'Expiration',
        'fileIds'         => 'FileIds',
        'groupId'         => 'GroupId',
        'previewLimit'    => 'PreviewLimit',
        'saveLimit'       => 'SaveLimit',
        'shareName'       => 'ShareName',
        'sharePwd'        => 'SharePwd',
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
        if (null !== $this->downloadLimit) {
            $res['DownloadLimit'] = $this->downloadLimit;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }
        if (null !== $this->fileIds) {
            $res['FileIds'] = $this->fileIds;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->previewLimit) {
            $res['PreviewLimit'] = $this->previewLimit;
        }
        if (null !== $this->saveLimit) {
            $res['SaveLimit'] = $this->saveLimit;
        }
        if (null !== $this->shareName) {
            $res['ShareName'] = $this->shareName;
        }
        if (null !== $this->sharePwd) {
            $res['SharePwd'] = $this->sharePwd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCdsFileShareLinkRequest
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
        if (isset($map['DownloadLimit'])) {
            $model->downloadLimit = $map['DownloadLimit'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }
        if (isset($map['FileIds'])) {
            if (!empty($map['FileIds'])) {
                $model->fileIds = $map['FileIds'];
            }
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['PreviewLimit'])) {
            $model->previewLimit = $map['PreviewLimit'];
        }
        if (isset($map['SaveLimit'])) {
            $model->saveLimit = $map['SaveLimit'];
        }
        if (isset($map['ShareName'])) {
            $model->shareName = $map['ShareName'];
        }
        if (isset($map['SharePwd'])) {
            $model->sharePwd = $map['SharePwd'];
        }

        return $model;
    }
}
