<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitCopyrightJobResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example bfb786c63****f4d80648792021eff90
     *
     * @var string
     */
    public $jobId;
    protected $_name = [
        'jobId' => 'JobId',
    ];

    public function validate()
    {
    }

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
