<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceInstanceAttributeRequest;

use AlibabaCloud\Dara\Model;

class licenseData extends Model
{
    /**
     * @var string
     */
    public $customData;
    protected $_name = [
        'customData' => 'CustomData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customData) {
            $res['CustomData'] = $this->customData;
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
        if (isset($map['CustomData'])) {
            $model->customData = $map['CustomData'];
        }

        return $model;
    }
}
