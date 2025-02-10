<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeFailoverTestJobResponseBody\failoverTestJobModel;

class DescribeFailoverTestJobResponseBody extends Model
{
    /**
     * @var failoverTestJobModel
     */
    public $failoverTestJobModel;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'failoverTestJobModel' => 'FailoverTestJobModel',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->failoverTestJobModel) {
            $this->failoverTestJobModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failoverTestJobModel) {
            $res['FailoverTestJobModel'] = null !== $this->failoverTestJobModel ? $this->failoverTestJobModel->toArray($noStream) : $this->failoverTestJobModel;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['FailoverTestJobModel'])) {
            $model->failoverTestJobModel = failoverTestJobModel::fromMap($map['FailoverTestJobModel']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
