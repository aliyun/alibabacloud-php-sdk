<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListAvailableEcsTypesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListAvailableEcsTypesResponseBody\instanceTypeFamilies\instanceTypeFamilyInfo;

class instanceTypeFamilies extends Model
{
    /**
     * @var instanceTypeFamilyInfo[]
     */
    public $instanceTypeFamilyInfo;
    protected $_name = [
        'instanceTypeFamilyInfo' => 'InstanceTypeFamilyInfo',
    ];

    public function validate()
    {
        if (\is_array($this->instanceTypeFamilyInfo)) {
            Model::validateArray($this->instanceTypeFamilyInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceTypeFamilyInfo) {
            if (\is_array($this->instanceTypeFamilyInfo)) {
                $res['InstanceTypeFamilyInfo'] = [];
                $n1 = 0;
                foreach ($this->instanceTypeFamilyInfo as $item1) {
                    $res['InstanceTypeFamilyInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['InstanceTypeFamilyInfo'])) {
            if (!empty($map['InstanceTypeFamilyInfo'])) {
                $model->instanceTypeFamilyInfo = [];
                $n1 = 0;
                foreach ($map['InstanceTypeFamilyInfo'] as $item1) {
                    $model->instanceTypeFamilyInfo[$n1++] = instanceTypeFamilyInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
