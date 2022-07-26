<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models\GetUatSpecCtDataResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $monthCount;

    /**
     * @var string
     */
    public $specType;
    protected $_name = [
        'monthCount' => 'MonthCount',
        'specType'   => 'SpecType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->monthCount) {
            $res['MonthCount'] = $this->monthCount;
        }
        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
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
        if (isset($map['MonthCount'])) {
            $model->monthCount = $map['MonthCount'];
        }
        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }

        return $model;
    }
}
