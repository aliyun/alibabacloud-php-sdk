<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetWarningStrategyConfigResponseBody\data\warningStrategyList\warningStrategyList;

use AlibabaCloud\Tea\Model;

class range extends Model
{
    /**
     * @var int
     */
    public $rangeNum;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'rangeNum' => 'RangeNum',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rangeNum) {
            $res['RangeNum'] = $this->rangeNum;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return range
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RangeNum'])) {
            $model->rangeNum = $map['RangeNum'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
