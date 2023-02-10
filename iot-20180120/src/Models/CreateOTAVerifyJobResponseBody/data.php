<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CreateOTAVerifyJobResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example wahVIzGkCMuAUE2gDERM02****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 2019-11-04T06:22:19.566Z
     *
     * @var string
     */
    public $utcCreate;
    protected $_name = [
        'jobId'     => 'JobId',
        'utcCreate' => 'UtcCreate',
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
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
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
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }

        return $model;
    }
}
