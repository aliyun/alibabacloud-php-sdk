<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeFunctionResponseBody\deployment;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeFunctionResponseBody\function_;
use AlibabaCloud\Tea\Model;

class DescribeFunctionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var function_
     */
    public $function;

    /**
     * @var deployment
     */
    public $deployment;
    protected $_name = [
        'requestId'  => 'RequestId',
        'function'   => 'Function',
        'deployment' => 'Deployment',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->function) {
            $res['Function'] = null !== $this->function ? $this->function->toMap() : null;
        }
        if (null !== $this->deployment) {
            $res['Deployment'] = null !== $this->deployment ? $this->deployment->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFunctionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Function'])) {
            $model->function = function_::fromMap($map['Function']);
        }
        if (isset($map['Deployment'])) {
            $model->deployment = deployment::fromMap($map['Deployment']);
        }

        return $model;
    }
}
