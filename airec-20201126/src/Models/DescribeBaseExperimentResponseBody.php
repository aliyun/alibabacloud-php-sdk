<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeBaseExperimentResponseBody\result;
use AlibabaCloud\Tea\Model;

class DescribeBaseExperimentResponseBody extends Model
{
    /**
     * @example A74E3FB7-406C-5CBB-833E-E49308B5DC05
     *
     * @var string
     */
    public $requestId;

    /**
     * @var result
     */
    public $result;
    protected $_name = [
        'requestId' => 'requestId',
        'result'    => 'result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['result'] = null !== $this->result ? $this->result->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBaseExperimentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['result'])) {
            $model->result = result::fromMap($map['result']);
        }

        return $model;
    }
}
