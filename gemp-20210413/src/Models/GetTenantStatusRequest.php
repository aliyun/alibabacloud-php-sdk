<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class GetTenantStatusRequest extends Model
{
    /**
     * @var int
     */
    public $tenantRamId;
    protected $_name = [
        'tenantRamId' => 'tenantRamId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantRamId) {
            $res['tenantRamId'] = $this->tenantRamId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTenantStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['tenantRamId'])) {
            $model->tenantRamId = $map['tenantRamId'];
        }

        return $model;
    }
}
