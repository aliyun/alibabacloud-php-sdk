<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitCopyrightExtractJobResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example ebbfe90c63b54ed4b61acb2f6c44****
     *
     * @var string
     */
    public $jobId;
    protected $_name = [
        'jobId' => 'JobId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
