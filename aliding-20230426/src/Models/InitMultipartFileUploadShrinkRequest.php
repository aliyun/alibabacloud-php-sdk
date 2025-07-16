<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class InitMultipartFileUploadShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $optionShrink;

    /**
     * @example dentryUuid
     *
     * @var string
     */
    public $parentDentryUuid;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'optionShrink' => 'Option',
        'parentDentryUuid' => 'ParentDentryUuid',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->optionShrink) {
            $res['Option'] = $this->optionShrink;
        }
        if (null !== $this->parentDentryUuid) {
            $res['ParentDentryUuid'] = $this->parentDentryUuid;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InitMultipartFileUploadShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Option'])) {
            $model->optionShrink = $map['Option'];
        }
        if (isset($map['ParentDentryUuid'])) {
            $model->parentDentryUuid = $map['ParentDentryUuid'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
