<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFileUploadInfoRequest\option;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFileUploadInfoRequest\tenantContext;

class GetFileUploadInfoRequest extends Model
{
    /**
     * @var option
     */
    public $option;

    /**
     * @var string
     */
    public $parentDentryUuid;

    /**
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

    public function validate()
    {
        if (null !== $this->option) {
            $this->option->validate();
        }
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->option) {
            $res['Option'] = null !== $this->option ? $this->option->toArray($noStream) : $this->option;
        }

        if (null !== $this->parentDentryUuid) {
            $res['ParentDentryUuid'] = $this->parentDentryUuid;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
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
