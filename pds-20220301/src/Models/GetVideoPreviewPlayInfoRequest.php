<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class GetVideoPreviewPlayInfoRequest extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $driveId;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var bool
     */
    public $getMasterUrl;

    /**
     * @var bool
     */
    public $getWithoutUrl;

    /**
     * @var bool
     */
    public $reTranscode;

    /**
     * @var string
     */
    public $shareId;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var int
     */
    public $urlExpireSec;
    protected $_name = [
        'category' => 'category',
        'driveId' => 'drive_id',
        'fileId' => 'file_id',
        'getMasterUrl' => 'get_master_url',
        'getWithoutUrl' => 'get_without_url',
        'reTranscode' => 're_transcode',
        'shareId' => 'share_id',
        'templateId' => 'template_id',
        'urlExpireSec' => 'url_expire_sec',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }

        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }

        if (null !== $this->getMasterUrl) {
            $res['get_master_url'] = $this->getMasterUrl;
        }

        if (null !== $this->getWithoutUrl) {
            $res['get_without_url'] = $this->getWithoutUrl;
        }

        if (null !== $this->reTranscode) {
            $res['re_transcode'] = $this->reTranscode;
        }

        if (null !== $this->shareId) {
            $res['share_id'] = $this->shareId;
        }

        if (null !== $this->templateId) {
            $res['template_id'] = $this->templateId;
        }

        if (null !== $this->urlExpireSec) {
            $res['url_expire_sec'] = $this->urlExpireSec;
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
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }

        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }

        if (isset($map['get_master_url'])) {
            $model->getMasterUrl = $map['get_master_url'];
        }

        if (isset($map['get_without_url'])) {
            $model->getWithoutUrl = $map['get_without_url'];
        }

        if (isset($map['re_transcode'])) {
            $model->reTranscode = $map['re_transcode'];
        }

        if (isset($map['share_id'])) {
            $model->shareId = $map['share_id'];
        }

        if (isset($map['template_id'])) {
            $model->templateId = $map['template_id'];
        }

        if (isset($map['url_expire_sec'])) {
            $model->urlExpireSec = $map['url_expire_sec'];
        }

        return $model;
    }
}
