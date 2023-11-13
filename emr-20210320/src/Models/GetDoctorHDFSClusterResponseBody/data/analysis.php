<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHDFSClusterResponseBody\data;

use AlibabaCloud\Tea\Model;

class analysis extends Model
{
    /**
     * @description The overall score of HDFS storage resources.
     *
     * @example 55
     *
     * @var int
     */
    public $hdfsScore;
    protected $_name = [
        'hdfsScore' => 'HdfsScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hdfsScore) {
            $res['HdfsScore'] = $this->hdfsScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return analysis
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HdfsScore'])) {
            $model->hdfsScore = $map['HdfsScore'];
        }

        return $model;
    }
}
