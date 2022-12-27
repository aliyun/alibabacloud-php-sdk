<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ModifyEnsEipAddressAttributeRequest extends Model
{
    /**
     * @example eip-5sw5dxzgi6umq4uexxkt8wpma
     *
     * @var string
     */
    public $allocationId;

    /**
     * @example 50
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @example abc
     *
     * @var string
     */
    public $description;

    /**
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
