<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UploadMediaRequest\tenantContext;

class UploadMediaRequest extends Model
{
    /**
     * @var tenantContext
     */
    public $tenantContext;

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
        'tenantContext' => 'TenantContext',
        'mediaName' => 'mediaName',
        'mediaType' => 'mediaType',
        'orgId' => 'orgId',
        'url' => 'url',
    ];

    public function validate()
    {
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
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
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
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
