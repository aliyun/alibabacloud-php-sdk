<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterGroupSupportParamResponseBody\resourceList;
use AlibabaCloud\Tea\Model;

class DescribeParameterGroupSupportParamResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example BB73740C-23E2-4392-9DA4-2660C74C****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The parameters.
     *
     * @var resourceList[]
     */
    public $resourceList;
    protected $_name = [
        'requestId'    => 'RequestId',
        'resourceList' => 'ResourceList',
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
        if (null !== $this->resourceList) {
            $res['ResourceList'] = [];
            if (null !== $this->resourceList && \is_array($this->resourceList)) {
                $n = 0;
                foreach ($this->resourceList as $item) {
                    $res['ResourceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeParameterGroupSupportParamResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceList'])) {
            if (!empty($map['ResourceList'])) {
                $model->resourceList = [];
                $n                   = 0;
                foreach ($map['ResourceList'] as $item) {
                    $model->resourceList[$n++] = null !== $item ? resourceList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
