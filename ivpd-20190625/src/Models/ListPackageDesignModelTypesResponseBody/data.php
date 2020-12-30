<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivpd\V20190625\Models\ListPackageDesignModelTypesResponseBody;

use AlibabaCloud\SDK\Ivpd\V20190625\Models\ListPackageDesignModelTypesResponseBody\data\modelTypeList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var modelTypeList[]
     */
    public $modelTypeList;
    protected $_name = [
        'modelTypeList' => 'ModelTypeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelTypeList) {
            $res['ModelTypeList'] = [];
            if (null !== $this->modelTypeList && \is_array($this->modelTypeList)) {
                $n = 0;
                foreach ($this->modelTypeList as $item) {
                    $res['ModelTypeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelTypeList'])) {
            if (!empty($map['ModelTypeList'])) {
                $model->modelTypeList = [];
                $n                    = 0;
                foreach ($map['ModelTypeList'] as $item) {
                    $model->modelTypeList[$n++] = null !== $item ? modelTypeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
