<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

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
    public $getWithoutUrl;

    /**
     * @var string
     */
    public $shareId;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'category'      => 'category',
        'driveId'       => 'drive_id',
        'fileId'        => 'file_id',
        'getWithoutUrl' => 'get_without_url',
        'shareId'       => 'share_id',
        'templateId'    => 'template_id',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->getWithoutUrl) {
            $res['get_without_url'] = $this->getWithoutUrl;
        }
        if (null !== $this->shareId) {
            $res['share_id'] = $this->shareId;
        }
        if (null !== $this->templateId) {
            $res['template_id'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVideoPreviewPlayInfoRequest
     */
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
        if (isset($map['get_without_url'])) {
            $model->getWithoutUrl = $map['get_without_url'];
        }
        if (isset($map['share_id'])) {
            $model->shareId = $map['share_id'];
        }
        if (isset($map['template_id'])) {
            $model->templateId = $map['template_id'];
        }

        return $model;
    }
}
