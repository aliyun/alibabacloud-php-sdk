<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\Tea\Model;

class DescribeGatherStatsResultRequest extends Model
{
    /**
     * @var string
     */
    public $changeId;
    protected $_name = [
        'changeId' => 'ChangeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeId) {
            $res['ChangeId'] = $this->changeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGatherStatsResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeId'])) {
            $model->changeId = $map['ChangeId'];
        }

        return $model;
    }
}
