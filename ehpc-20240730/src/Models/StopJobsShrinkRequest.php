<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class StopJobsShrinkRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The IDs of the jobs that you want to stop.
     *
     * @var string
     */
    public $jobIdsShrink;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'jobIdsShrink' => 'JobIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->jobIdsShrink) {
            $res['JobIds'] = $this->jobIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopJobsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['JobIds'])) {
            $model->jobIdsShrink = $map['JobIds'];
        }

        return $model;
    }
}
