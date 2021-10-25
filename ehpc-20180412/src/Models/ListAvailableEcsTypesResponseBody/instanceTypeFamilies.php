<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListAvailableEcsTypesResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListAvailableEcsTypesResponseBody\instanceTypeFamilies\instanceTypeFamilyInfo;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypeFamilyInfo) {
            $res['InstanceTypeFamilyInfo'] = [];
            if (null !== $this->instanceTypeFamilyInfo && \is_array($this->instanceTypeFamilyInfo)) {
                $n = 0;
                foreach ($this->instanceTypeFamilyInfo as $item) {
                    $res['InstanceTypeFamilyInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTypeFamilies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypeFamilyInfo'])) {
            if (!empty($map['InstanceTypeFamilyInfo'])) {
                $model->instanceTypeFamilyInfo = [];
                $n                             = 0;
                foreach ($map['InstanceTypeFamilyInfo'] as $item) {
                    $model->instanceTypeFamilyInfo[$n++] = null !== $item ? instanceTypeFamilyInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
