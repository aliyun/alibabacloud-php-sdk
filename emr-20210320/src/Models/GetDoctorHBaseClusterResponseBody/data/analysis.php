<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseClusterResponseBody\data;

use AlibabaCloud\Tea\Model;

class analysis extends Model
{
    /**
     * @description The overall score of the HBase cluster.
     *
     * @example 85
     *
     * @var int
     */
    public $hbaseScore;
    protected $_name = [
        'hbaseScore' => 'HbaseScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hbaseScore) {
            $res['HbaseScore'] = $this->hbaseScore;
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
        if (isset($map['HbaseScore'])) {
            $model->hbaseScore = $map['HbaseScore'];
        }

        return $model;
    }
}
