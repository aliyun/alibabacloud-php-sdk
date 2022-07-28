<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryChildDivisionCodeByIdResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryChildDivisionCodeByIdResponseBody\model\divisionList;
use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var divisionList[]
     */
    public $divisionList;
    protected $_name = [
        'divisionList' => 'DivisionList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->divisionList) {
            $res['DivisionList'] = [];
            if (null !== $this->divisionList && \is_array($this->divisionList)) {
                $n = 0;
                foreach ($this->divisionList as $item) {
                    $res['DivisionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DivisionList'])) {
            if (!empty($map['DivisionList'])) {
                $model->divisionList = [];
                $n                   = 0;
                foreach ($map['DivisionList'] as $item) {
                    $model->divisionList[$n++] = null !== $item ? divisionList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
