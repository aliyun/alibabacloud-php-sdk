<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\Dara\Model;

class GetPotentialFailZonesRequest extends Model
{
    /**
     * @var bool
     */
    public $isPlanId;
    /**
     * @var string
     */
    public $objectId;
    protected $_name = [
        'isPlanId' => 'IsPlanId',
        'objectId' => 'ObjectId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
