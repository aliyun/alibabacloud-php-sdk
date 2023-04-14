<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\DescribeExperimentEnvProgressResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $progress;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'progress' => 'progress',
        'status'   => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
