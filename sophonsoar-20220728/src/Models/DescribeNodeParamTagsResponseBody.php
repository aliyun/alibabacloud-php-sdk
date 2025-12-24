<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeNodeParamTagsResponseBody\paramReferredPaths;

class DescribeNodeParamTagsResponseBody extends Model
{
    /**
     * @var paramReferredPaths[]
     */
    public $paramReferredPaths;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'paramReferredPaths' => 'ParamReferredPaths',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->paramReferredPaths)) {
            Model::validateArray($this->paramReferredPaths);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->paramReferredPaths) {
            if (\is_array($this->paramReferredPaths)) {
                $res['ParamReferredPaths'] = [];
                $n1 = 0;
                foreach ($this->paramReferredPaths as $item1) {
                    $res['ParamReferredPaths'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ParamReferredPaths'])) {
            if (!empty($map['ParamReferredPaths'])) {
                $model->paramReferredPaths = [];
                $n1 = 0;
                foreach ($map['ParamReferredPaths'] as $item1) {
                    $model->paramReferredPaths[$n1] = paramReferredPaths::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
