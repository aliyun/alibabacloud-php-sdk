<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class StopJobsRequest extends Model
{
    /**
     * @description 作业ID列表
     *
     * @var string[]
     */
    public $jobIds;
    protected $_name = [
        'jobIds' => 'JobIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobIds) {
            $res['JobIds'] = $this->jobIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobIds'])) {
            if (!empty($map['JobIds'])) {
                $model->jobIds = $map['JobIds'];
            }
        }

        return $model;
    }
}
