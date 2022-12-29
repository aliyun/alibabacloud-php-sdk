<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models;

use AlibabaCloud\Tea\Model;

class GetTrendIndexRequest extends Model
{
    /**
     * @example [1623]
     *
     * @var string
     */
    public $cateIds;

    /**
     * @example 1
     *
     * @var int
     */
    public $monthNum;
    protected $_name = [
        'cateIds'  => 'CateIds',
        'monthNum' => 'MonthNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cateIds) {
            $res['CateIds'] = $this->cateIds;
        }
        if (null !== $this->monthNum) {
            $res['MonthNum'] = $this->monthNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTrendIndexRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CateIds'])) {
            $model->cateIds = $map['CateIds'];
        }
        if (isset($map['MonthNum'])) {
            $model->monthNum = $map['MonthNum'];
        }

        return $model;
    }
}
