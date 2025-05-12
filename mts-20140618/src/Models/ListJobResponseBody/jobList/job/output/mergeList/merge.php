<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListJobResponseBody\jobList\job\output\mergeList;

use AlibabaCloud\Dara\Model;

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
        'roleArn' => 'RoleArn',
        'start' => 'Start',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
