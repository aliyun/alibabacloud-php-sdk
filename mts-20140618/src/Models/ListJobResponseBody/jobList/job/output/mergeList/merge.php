<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListJobResponseBody\jobList\job\output\mergeList;

use AlibabaCloud\Tea\Model;

class merge extends Model
{
    /**
     * @var string
     */
    public $start;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $mergeURL;

    /**
     * @var string
     */
    public $duration;
    protected $_name = [
        'start'    => 'Start',
        'roleArn'  => 'RoleArn',
        'mergeURL' => 'MergeURL',
        'duration' => 'Duration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->mergeURL) {
            $res['MergeURL'] = $this->mergeURL;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
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
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['MergeURL'])) {
            $model->mergeURL = $map['MergeURL'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        return $model;
    }
}
