<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListAvailableEcsTypesResponseBody\instanceTypeFamilies\instanceTypeFamilyInfo;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListAvailableEcsTypesResponseBody\instanceTypeFamilies\instanceTypeFamilyInfo\types\typesInfo;
use AlibabaCloud\Tea\Model;

class types extends Model
{
    /**
     * @var typesInfo[]
     */
    public $typesInfo;
    protected $_name = [
        'typesInfo' => 'TypesInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->typesInfo) {
            $res['TypesInfo'] = [];
            if (null !== $this->typesInfo && \is_array($this->typesInfo)) {
                $n = 0;
                foreach ($this->typesInfo as $item) {
                    $res['TypesInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return types
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TypesInfo'])) {
            if (!empty($map['TypesInfo'])) {
                $model->typesInfo = [];
                $n                = 0;
                foreach ($map['TypesInfo'] as $item) {
                    $model->typesInfo[$n++] = null !== $item ? typesInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
