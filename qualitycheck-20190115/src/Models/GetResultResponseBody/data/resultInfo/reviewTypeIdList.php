<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\reviewTypeIdList\reviewTypeIdList;

class reviewTypeIdList extends Model
{
    /**
     * @var reviewTypeIdList[]
     */
    public $reviewTypeIdList;
    protected $_name = [
        'reviewTypeIdList' => 'ReviewTypeIdList',
    ];

    public function validate()
    {
        if (\is_array($this->reviewTypeIdList)) {
            Model::validateArray($this->reviewTypeIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reviewTypeIdList) {
            if (\is_array($this->reviewTypeIdList)) {
                $res['ReviewTypeIdList'] = [];
                $n1 = 0;
                foreach ($this->reviewTypeIdList as $item1) {
                    $res['ReviewTypeIdList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ReviewTypeIdList'])) {
            if (!empty($map['ReviewTypeIdList'])) {
                $model->reviewTypeIdList = [];
                $n1 = 0;
                foreach ($map['ReviewTypeIdList'] as $item1) {
                    $model->reviewTypeIdList[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
