<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClientProblemTypeResponseBody;

use AlibabaCloud\Tea\Model;

class problemTypes extends Model
{
    /**
     * @var string
     */
    public $problemDetail;

    /**
     * @example 4
     *
     * @var string
     */
    public $problemId;

    /**
     * @example high_cpu
     *
     * @var string
     */
    public $problemType;
    protected $_name = [
        'problemDetail' => 'problemDetail',
        'problemId'     => 'problemId',
        'problemType'   => 'problemType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->problemDetail) {
            $res['problemDetail'] = $this->problemDetail;
        }
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }
        if (null !== $this->problemType) {
            $res['problemType'] = $this->problemType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return problemTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['problemDetail'])) {
            $model->problemDetail = $map['problemDetail'];
        }
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }
        if (isset($map['problemType'])) {
            $model->problemType = $map['problemType'];
        }

        return $model;
    }
}
