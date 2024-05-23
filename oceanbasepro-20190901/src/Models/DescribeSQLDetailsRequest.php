<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeSQLDetailsRequest extends Model
{
    /**
     * @description The SQL text.
     *
     * This parameter is required.
     * @example 8D6E84****0B8FB1823D199E2CA1****
     *
     * @var string
     */
    public $SQLId;

    /**
     * @description SQLID.
     *
     * This parameter is required.
     * @example t2mr3oae0****
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'SQLId'    => 'SQLId',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SQLId) {
            $res['SQLId'] = $this->SQLId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSQLDetailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SQLId'])) {
            $model->SQLId = $map['SQLId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
