<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\ListJobResponseBody\jobList\job\output\mergeList;

use AlibabaCloud\Tea\Model;

class merge extends Model
{
    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $mergeURL;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $start;
    protected $_name = [
        'duration' => 'Duration',
        'mergeURL' => 'MergeURL',
        'roleArn'  => 'RoleArn',
        'start'    => 'Start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->mergeURL) {
            $res['MergeURL'] = $this->mergeURL;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return merge
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['MergeURL'])) {
            $model->mergeURL = $map['MergeURL'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
