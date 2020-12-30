<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityStatInfoResponseBody;

use AlibabaCloud\Tea\Model;

class attackEvent extends Model
{
    /**
     * @var string[]
     */
    public $valueArray;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string[]
     */
    public $dateArray;
    protected $_name = [
        'valueArray' => 'ValueArray',
        'totalCount' => 'TotalCount',
        'dateArray'  => 'DateArray',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->valueArray) {
            $res['ValueArray'] = $this->valueArray;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->dateArray) {
            $res['DateArray'] = $this->dateArray;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attackEvent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ValueArray'])) {
            if (!empty($map['ValueArray'])) {
                $model->valueArray = $map['ValueArray'];
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['DateArray'])) {
            if (!empty($map['DateArray'])) {
                $model->dateArray = $map['DateArray'];
            }
        }

        return $model;
    }
}
