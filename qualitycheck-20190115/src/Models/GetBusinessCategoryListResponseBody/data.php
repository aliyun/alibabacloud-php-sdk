<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetBusinessCategoryListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetBusinessCategoryListResponseBody\data\businessCategoryBasicInfo;

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
        if (\is_array($this->businessCategoryBasicInfo)) {
            Model::validateArray($this->businessCategoryBasicInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessCategoryBasicInfo) {
            if (\is_array($this->businessCategoryBasicInfo)) {
                $res['BusinessCategoryBasicInfo'] = [];
                $n1 = 0;
                foreach ($this->businessCategoryBasicInfo as $item1) {
                    $res['BusinessCategoryBasicInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['BusinessCategoryBasicInfo'])) {
            if (!empty($map['BusinessCategoryBasicInfo'])) {
                $model->businessCategoryBasicInfo = [];
                $n1 = 0;
                foreach ($map['BusinessCategoryBasicInfo'] as $item1) {
                    $model->businessCategoryBasicInfo[$n1] = businessCategoryBasicInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
