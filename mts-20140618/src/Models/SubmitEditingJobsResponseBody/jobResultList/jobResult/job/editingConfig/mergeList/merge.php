<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\mergeList;

use AlibabaCloud\Tea\Model;

class merge extends Model
{
    /**
     * @var string
     */
    public $mergeURL;

    /**
     * @var string
     */
    public $start;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $roleArn;
    protected $_name = [
        'mergeURL' => 'MergeURL',
        'start'    => 'Start',
        'duration' => 'Duration',
        'roleArn'  => 'RoleArn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mergeURL) {
            $res['MergeURL'] = $this->mergeURL;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
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
        if (isset($map['MergeURL'])) {
            $model->mergeURL = $map['MergeURL'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }

        return $model;
    }
}
