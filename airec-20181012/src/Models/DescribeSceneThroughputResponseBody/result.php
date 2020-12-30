<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\DescribeSceneThroughputResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $pvCount;
    protected $_name = [
        'pvCount' => 'PvCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pvCount) {
            $res['PvCount'] = $this->pvCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PvCount'])) {
            $model->pvCount = $map['PvCount'];
        }

        return $model;
    }
}
