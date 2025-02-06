<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\reviewTypeIdList\reviewTypeIdList;

use AlibabaCloud\Dara\Model;

class reviewKeyIdList extends Model
{
    /**
     * @var int[]
     */
    public $reviewKeyIdList;
    protected $_name = [
        'reviewKeyIdList' => 'ReviewKeyIdList',
    ];

    public function validate()
    {
        if (\is_array($this->reviewKeyIdList)) {
            Model::validateArray($this->reviewKeyIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reviewKeyIdList) {
            if (\is_array($this->reviewKeyIdList)) {
                $res['ReviewKeyIdList'] = [];
                $n1                     = 0;
                foreach ($this->reviewKeyIdList as $item1) {
                    $res['ReviewKeyIdList'][$n1++] = $item1;
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
        if (isset($map['ReviewKeyIdList'])) {
            if (!empty($map['ReviewKeyIdList'])) {
                $model->reviewKeyIdList = [];
                $n1                     = 0;
                foreach ($map['ReviewKeyIdList'] as $item1) {
                    $model->reviewKeyIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
