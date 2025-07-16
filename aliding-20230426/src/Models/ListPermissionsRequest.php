<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\ListPermissionsRequest\option;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListPermissionsRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class ListPermissionsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example KGZLxjv9VGkoG9YwHE5wx7k2V6EDybno
     *
     * @var string
     */
    public $dentryUuid;

    /**
     * @var option
     */
    public $option;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'dentryUuid' => 'DentryUuid',
        'option' => 'Option',
        'tenantContext' => 'TenantContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dentryUuid) {
            $res['DentryUuid'] = $this->dentryUuid;
        }
        if (null !== $this->option) {
            $res['Option'] = null !== $this->option ? $this->option->toMap() : null;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPermissionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DentryUuid'])) {
            $model->dentryUuid = $map['DentryUuid'];
        }
        if (isset($map['Option'])) {
            $model->option = option::fromMap($map['Option']);
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
