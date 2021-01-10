<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetBusinessCategoryListResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetBusinessCategoryListResponseBody\data\businessCategoryBasicInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var businessCategoryBasicInfo[]
     */
    public $businessCategoryBasicInfo;
    protected $_name = [
        'businessCategoryBasicInfo' => 'BusinessCategoryBasicInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessCategoryBasicInfo) {
            $res['BusinessCategoryBasicInfo'] = [];
            if (null !== $this->businessCategoryBasicInfo && \is_array($this->businessCategoryBasicInfo)) {
                $n = 0;
                foreach ($this->businessCategoryBasicInfo as $item) {
                    $res['BusinessCategoryBasicInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['BusinessCategoryBasicInfo'])) {
            if (!empty($map['BusinessCategoryBasicInfo'])) {
                $model->businessCategoryBasicInfo = [];
                $n                                = 0;
                foreach ($map['BusinessCategoryBasicInfo'] as $item) {
                    $model->businessCategoryBasicInfo[$n++] = null !== $item ? businessCategoryBasicInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
