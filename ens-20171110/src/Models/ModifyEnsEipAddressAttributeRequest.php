<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ModifyEnsEipAddressAttributeRequest extends Model
{
    /**
     * @description The ID of the EIP.
     *
     * This parameter is required.
     * @example eip-5sw5dxzgi6umq4uexxkt8wpma
     *
     * @var string
     */
    public $allocationId;

    /**
     * @description The peak bandwidth of the EIP. Default value: 5. Valid values: **5** to **10000**. Unit: Mbit/s.
     *
     * @example 50
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The new description of the EIP. The description must be 2 to 256 characters in length and cannot start with http:// or https://.
     *
     * @example abc
     *
     * @var string
     */
    public $description;

    /**
     * @description The new name of the EIP. The name must be 2 to 128 characters in length and cannot start with http:// or https://.
     *
     * @example test-api-modify
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'allocationId' => 'AllocationId',
        'bandwidth'    => 'Bandwidth',
        'description'  => 'Description',
        'name'         => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyEnsEipAddressAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
