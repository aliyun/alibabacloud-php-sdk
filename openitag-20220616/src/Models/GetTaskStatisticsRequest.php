<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Tea\Model;

class GetTaskStatisticsRequest extends Model
{
    /**
     * @example Item
     *
     * @var string
     */
    public $statType;
    protected $_name = [
        'statType' => 'StatType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->statType) {
            $res['StatType'] = $this->statType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTaskStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StatType'])) {
            $model->statType = $map['StatType'];
        }

        return $model;
    }
}
