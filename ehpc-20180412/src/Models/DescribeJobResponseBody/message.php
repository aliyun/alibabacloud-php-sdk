<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeJobResponseBody;

use AlibabaCloud\Dara\Model;

class message extends Model
{
    /**
     * @var string
     */
    public $jobInfo;
    protected $_name = [
        'jobInfo' => 'JobInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobInfo) {
            $res['JobInfo'] = $this->jobInfo;
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
        if (isset($map['JobInfo'])) {
            $model->jobInfo = $map['JobInfo'];
        }

        return $model;
    }
}
