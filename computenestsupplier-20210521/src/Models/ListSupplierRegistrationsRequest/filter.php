<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListSupplierRegistrationsRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description Name of the filter field. Allowed values:
     *
     * - SupplierUid: The aliUid of supplier.
     * - SupplierName: The name of supplier.
     * - RegistrationId: Registration ID.
     *
     * - Status: Registration status. Allowed values: Submitted, Approved, Rejected.
     *
     * @example SupplierUid
     *
     * @var string
     */
    public $name;

    /**
     * @description Filter value.
     *
     * @var string[]
     */
    public $value;
    protected $_name = [
        'name' => 'Name',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            if (!empty($map['Value'])) {
                $model->value = $map['Value'];
            }
        }

        return $model;
    }
}
