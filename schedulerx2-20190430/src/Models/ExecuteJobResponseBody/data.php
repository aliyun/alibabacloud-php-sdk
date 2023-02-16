<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ExecuteJobResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the job instance.
     *
     * @example 11111111
     *
     * @var int
     */
    public $jobInstanceId;
    protected $_name = [
        'jobInstanceId' => 'JobInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobInstanceId) {
            $res['JobInstanceId'] = $this->jobInstanceId;
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
        if (isset($map['JobInstanceId'])) {
            $model->jobInstanceId = $map['JobInstanceId'];
        }

        return $model;
    }
}
