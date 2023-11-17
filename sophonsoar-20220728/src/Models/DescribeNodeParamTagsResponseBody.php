<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeNodeParamTagsResponseBody\paramReferredPaths;
use AlibabaCloud\Tea\Model;

class DescribeNodeParamTagsResponseBody extends Model
{
    /**
     * @var paramReferredPaths[]
     */
    public $paramReferredPaths;

    /**
     * @example 6BE94351-712A-505D-A40A-BC77CC8254A9
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'paramReferredPaths' => 'ParamReferredPaths',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paramReferredPaths) {
            $res['ParamReferredPaths'] = [];
            if (null !== $this->paramReferredPaths && \is_array($this->paramReferredPaths)) {
                $n = 0;
                foreach ($this->paramReferredPaths as $item) {
                    $res['ParamReferredPaths'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNodeParamTagsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParamReferredPaths'])) {
            if (!empty($map['ParamReferredPaths'])) {
                $model->paramReferredPaths = [];
                $n                         = 0;
                foreach ($map['ParamReferredPaths'] as $item) {
                    $model->paramReferredPaths[$n++] = null !== $item ? paramReferredPaths::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
