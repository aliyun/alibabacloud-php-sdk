<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class UploadMediaShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $tenantContextShrink;
    /**
     * @var string
     */
    public $mediaName;
    /**
     * @var string
     */
    public $mediaType;
    /**
     * @var int
     */
    public $orgId;
    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'tenantContextShrink' => 'TenantContext',
        'mediaName'           => 'mediaName',
        'mediaType'           => 'mediaType',
        'orgId'               => 'orgId',
        'url'                 => 'url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        if (null !== $this->mediaName) {
            $res['mediaName'] = $this->mediaName;
        }

        if (null !== $this->mediaType) {
            $res['mediaType'] = $this->mediaType;
        }

        if (null !== $this->orgId) {
            $res['orgId'] = $this->orgId;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        if (isset($map['mediaName'])) {
            $model->mediaName = $map['mediaName'];
        }

        if (isset($map['mediaType'])) {
            $model->mediaType = $map['mediaType'];
        }

        if (isset($map['orgId'])) {
            $model->orgId = $map['orgId'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
