<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class UploadAppSiteValidationFileRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $file;

    /**
     * @var string
     */
    public $fileContent;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $siteHost;
    protected $_name = [
        'bizId' => 'BizId',
        'domain' => 'Domain',
        'file' => 'File',
        'fileContent' => 'FileContent',
        'fileType' => 'FileType',
        'siteHost' => 'SiteHost',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->file) {
            $res['File'] = $this->file;
        }

        if (null !== $this->fileContent) {
            $res['FileContent'] = $this->fileContent;
        }

        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        if (null !== $this->siteHost) {
            $res['SiteHost'] = $this->siteHost;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['File'])) {
            $model->file = $map['File'];
        }

        if (isset($map['FileContent'])) {
            $model->fileContent = $map['FileContent'];
        }

        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        if (isset($map['SiteHost'])) {
            $model->siteHost = $map['SiteHost'];
        }

        return $model;
    }
}
