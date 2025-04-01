<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantEncryptionResponseBody\tenantEncryption;

class ModifyTenantEncryptionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tenantEncryption
     */
    public $tenantEncryption;
    protected $_name = [
        'requestId' => 'RequestId',
        'tenantEncryption' => 'TenantEncryption',
    ];

    public function validate()
    {
        if (null !== $this->tenantEncryption) {
            $this->tenantEncryption->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tenantEncryption) {
            $res['TenantEncryption'] = null !== $this->tenantEncryption ? $this->tenantEncryption->toArray($noStream) : $this->tenantEncryption;
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

        if (isset($map['TenantEncryption'])) {
            $model->tenantEncryption = tenantEncryption::fromMap($map['TenantEncryption']);
        }

        return $model;
    }
}
