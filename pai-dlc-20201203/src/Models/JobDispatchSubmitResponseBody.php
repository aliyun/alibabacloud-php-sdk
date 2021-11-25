<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class JobDispatchSubmitResponseBody extends Model
{
    /**
     * @description 作业Url
     *
     * @var string
     */
    public $jobUrl;
    protected $_name = [
        'jobUrl' => 'JobUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobUrl) {
            $res['JobUrl'] = $this->jobUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JobDispatchSubmitResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobUrl'])) {
            $model->jobUrl = $map['JobUrl'];
        }

        return $model;
    }
}
