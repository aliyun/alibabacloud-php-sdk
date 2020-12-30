<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeRequestStatisticCountByEsnBizGroup30MResponseBody;

use AlibabaCloud\Tea\Model;

class statistic extends Model
{
    /**
     * @var string
     */
    public $detectIp;

    /**
     * @var string
     */
    public $esnGroupId;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'detectIp'   => 'DetectIp',
        'esnGroupId' => 'EsnGroupId',
        'count'      => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detectIp) {
            $res['DetectIp'] = $this->detectIp;
        }
        if (null !== $this->esnGroupId) {
            $res['EsnGroupId'] = $this->esnGroupId;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetectIp'])) {
            $model->detectIp = $map['DetectIp'];
        }
        if (isset($map['EsnGroupId'])) {
            $model->esnGroupId = $map['EsnGroupId'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
