<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant;

class DescribeTenantResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tenant
     */
    public $tenant;
    protected $_name = [
        'requestId' => 'RequestId',
        'tenant' => 'Tenant',
    ];

    public function validate()
    {
        if (null !== $this->tenant) {
            $this->tenant->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tenant) {
            $res['Tenant'] = null !== $this->tenant ? $this->tenant->toArray($noStream) : $this->tenant;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Tenant'])) {
            $model->tenant = tenant::fromMap($map['Tenant']);
        }

        return $model;
    }
}
