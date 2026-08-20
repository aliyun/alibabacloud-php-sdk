<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\UpdateProhibitedPolicyRequest;

use AlibabaCloud\Dara\Model;

class softwareIds extends Model
{
    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $softwareId;
    protected $_name = [
        'isDefault' => 'IsDefault',
        'softwareId' => 'SoftwareId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->softwareId) {
            $res['SoftwareId'] = $this->softwareId;
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
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['SoftwareId'])) {
            $model->softwareId = $map['SoftwareId'];
        }

        return $model;
    }
}
