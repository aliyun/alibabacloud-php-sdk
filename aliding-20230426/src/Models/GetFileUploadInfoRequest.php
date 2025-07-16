<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFileUploadInfoRequest\option;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFileUploadInfoRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class GetFileUploadInfoRequest extends Model
{
    /**
     * @var option
     */
    public $option;

    /**
     * @example dentryUuid
     *
     * @var string
     */
    public $parentDentryUuid;

    /**
     * @example HEADER_SIGNATURE
     *
     * @var string
     */
    public $protocol;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'option' => 'Option',
        'parentDentryUuid' => 'ParentDentryUuid',
        'protocol' => 'Protocol',
        'tenantContext' => 'TenantContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->option) {
            $res['Option'] = null !== $this->option ? $this->option->toMap() : null;
        }
        if (null !== $this->parentDentryUuid) {
            $res['ParentDentryUuid'] = $this->parentDentryUuid;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFileUploadInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Option'])) {
            $model->option = option::fromMap($map['Option']);
        }
        if (isset($map['ParentDentryUuid'])) {
            $model->parentDentryUuid = $map['ParentDentryUuid'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
