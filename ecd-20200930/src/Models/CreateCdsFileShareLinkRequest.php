<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateCdsFileShareLinkRequest extends Model
{
    /**
     * @example cn-shanghai+cds-135515****
     *
     * @var string
     */
    public $cdsId;

    /**
     * @var string
     */
    public $description;

    /**
     * @example false
     *
     * @var bool
     */
    public $disableDownload;

    /**
     * @example false
     *
     * @var bool
     */
    public $disablePreview;

    /**
     * @example false
     *
     * @var bool
     */
    public $disableSave;

    /**
     * @example 100
     *
     * @var int
     */
    public $downloadLimit;

    /**
     * @example user01
     *
     * @var string
     */
    public $endUserId;

    /**
     * @example 2020-06-28T11:33:00.000+08:00
     *
     * @var string
     */
    public $expiration;

    /**
     * @var string[]
     */
    public $fileIds;

    /**
     * @example 100
     *
     * @var int
     */
    public $previewLimit;

    /**
     * @example 100
     *
     * @var int
     */
    public $saveLimit;

    /**
     * @example view.txt
     *
     * @var string
     */
    public $shareName;

    /**
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
