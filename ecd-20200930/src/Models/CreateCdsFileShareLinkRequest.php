<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class CreateCdsFileShareLinkRequest extends Model
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
    public $downloadLimit;
    /**
     * @var string
     */
    public $endUserId;
    /**
     * @var string
     */
    public $expiration;
    /**
     * @var string[]
     */
    public $fileIds;
    /**
     * @var string
     */
    public $groupId;
    /**
     * @var int
     */
    public $previewLimit;
    /**
     * @var int
     */
    public $saveLimit;
    /**
     * @var string
     */
    public $shareName;
    /**
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
        if (\is_array($this->fileIds)) {
            Model::validateArray($this->fileIds);
        }
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
            if (\is_array($this->fileIds)) {
                $res['FileIds'] = [];
                $n1             = 0;
                foreach ($this->fileIds as $item1) {
                    $res['FileIds'][$n1++] = $item1;
                }
            }
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
                $model->fileIds = [];
                $n1             = 0;
                foreach ($map['FileIds'] as $item1) {
                    $model->fileIds[$n1++] = $item1;
                }
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
