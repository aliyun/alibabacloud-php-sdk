<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryDPUtilizationDetailResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryDPUtilizationDetailResponseBody\data\detailList\detailList;

class detailList extends Model
{
    /**
     * @var detailList[]
     */
    public $detailList;
    protected $_name = [
        'detailList' => 'DetailList',
    ];

    public function validate()
    {
        if (\is_array($this->detailList)) {
            Model::validateArray($this->detailList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detailList) {
            if (\is_array($this->detailList)) {
                $res['DetailList'] = [];
                $n1 = 0;
                foreach ($this->detailList as $item1) {
                    $res['DetailList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DetailList'])) {
            if (!empty($map['DetailList'])) {
                $model->detailList = [];
                $n1 = 0;
                foreach ($map['DetailList'] as $item1) {
                    $model->detailList[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
