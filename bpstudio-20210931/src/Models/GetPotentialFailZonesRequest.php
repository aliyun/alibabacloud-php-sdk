<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\Tea\Model;

class GetPotentialFailZonesRequest extends Model
{
    /**
     * @description Specifies whether the value of this parameter is the ID of a disaster recovery set.
     *
     * @example true
     *
     * @var bool
     */
    public $isPlanId;

    /**
     * @description If you set IsPlanId to false, specify the ID of a disaster recovery application. If you set IsPlanId to true, specify the ID of a disaster recovery set.
     *
     * @example FS3ATPTOSC4SE1GG
     *
     * @var string
     */
    public $objectId;
    protected $_name = [
        'isPlanId' => 'IsPlanId',
        'objectId' => 'ObjectId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->isPlanId) {
            $res['IsPlanId'] = $this->isPlanId;
        }
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPotentialFailZonesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsPlanId'])) {
            $model->isPlanId = $map['IsPlanId'];
        }
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }

        return $model;
    }
}
