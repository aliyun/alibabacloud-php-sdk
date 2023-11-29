<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantEncryptionResponseBody\tenantEncryption;
use AlibabaCloud\Tea\Model;

class ModifyTenantEncryptionResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example EE205C00-30E4-****-****-87E3A8A2AA0C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description job
     *
     * @var tenantEncryption
     */
    public $tenantEncryption;
    protected $_name = [
        'requestId'        => 'RequestId',
        'tenantEncryption' => 'TenantEncryption',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tenantEncryption) {
            $res['TenantEncryption'] = null !== $this->tenantEncryption ? $this->tenantEncryption->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTenantEncryptionResponseBody
     */
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
