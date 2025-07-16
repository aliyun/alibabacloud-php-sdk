<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetMultipartFileUploadInfosShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $optionShrink;

    /**
     * @var string
     */
    public $partNumbersShrink;

    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @example hwHPAAAAAipHxxxxx
     *
     * @var string
     */
    public $uploadKey;
    protected $_name = [
        'optionShrink' => 'Option',
        'partNumbersShrink' => 'PartNumbers',
        'tenantContextShrink' => 'TenantContext',
        'uploadKey' => 'UploadKey',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->optionShrink) {
            $res['Option'] = $this->optionShrink;
        }
        if (null !== $this->partNumbersShrink) {
            $res['PartNumbers'] = $this->partNumbersShrink;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }
        if (null !== $this->uploadKey) {
            $res['UploadKey'] = $this->uploadKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMultipartFileUploadInfosShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Option'])) {
            $model->optionShrink = $map['Option'];
        }
        if (isset($map['PartNumbers'])) {
            $model->partNumbersShrink = $map['PartNumbers'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }
        if (isset($map['UploadKey'])) {
            $model->uploadKey = $map['UploadKey'];
        }

        return $model;
    }
}
