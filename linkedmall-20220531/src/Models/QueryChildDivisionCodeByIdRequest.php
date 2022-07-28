<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models;

use AlibabaCloud\Tea\Model;

class QueryChildDivisionCodeByIdRequest extends Model
{
    /**
     * @var string
     */
    public $distributorId;

    /**
     * @var string
     */
    public $divisionCode;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'distributorId' => 'DistributorId',
        'divisionCode'  => 'DivisionCode',
        'tenantId'      => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->distributorId) {
            $res['DistributorId'] = $this->distributorId;
        }
        if (null !== $this->divisionCode) {
            $res['DivisionCode'] = $this->divisionCode;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryChildDivisionCodeByIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DistributorId'])) {
            $model->distributorId = $map['DistributorId'];
        }
        if (isset($map['DivisionCode'])) {
            $model->divisionCode = $map['DivisionCode'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
