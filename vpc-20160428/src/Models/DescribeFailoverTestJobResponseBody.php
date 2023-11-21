<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeFailoverTestJobResponseBody\failoverTestJobModel;
use AlibabaCloud\Tea\Model;

class DescribeFailoverTestJobResponseBody extends Model
{
    /**
     * @var failoverTestJobModel
     */
    public $failoverTestJobModel;

    /**
     * @example C44F62BE-9CE7-4277-B117-69243F3988BF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'failoverTestJobModel' => 'FailoverTestJobModel',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failoverTestJobModel) {
            $res['FailoverTestJobModel'] = null !== $this->failoverTestJobModel ? $this->failoverTestJobModel->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFailoverTestJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailoverTestJobModel'])) {
            $model->failoverTestJobModel = failoverTestJobModel::fromMap($map['FailoverTestJobModel']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
