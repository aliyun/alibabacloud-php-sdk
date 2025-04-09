<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceTypeFamiliesResponseBody\instanceTypeFamilies;

use AlibabaCloud\Dara\Model;

class instanceTypeFamily extends Model
{
    /**
     * @var string
     */
    public $instanceTypeFamilyDesc;

    /**
     * @var string
     */
    public $instanceTypeFamilyId;
    protected $_name = [
        'instanceTypeFamilyDesc' => 'InstanceTypeFamilyDesc',
        'instanceTypeFamilyId' => 'InstanceTypeFamilyId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceTypeFamilyDesc) {
            $res['InstanceTypeFamilyDesc'] = $this->instanceTypeFamilyDesc;
        }

        if (null !== $this->instanceTypeFamilyId) {
            $res['InstanceTypeFamilyId'] = $this->instanceTypeFamilyId;
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
        if (isset($map['InstanceTypeFamilyDesc'])) {
            $model->instanceTypeFamilyDesc = $map['InstanceTypeFamilyDesc'];
        }

        if (isset($map['InstanceTypeFamilyId'])) {
            $model->instanceTypeFamilyId = $map['InstanceTypeFamilyId'];
        }

        return $model;
    }
}
