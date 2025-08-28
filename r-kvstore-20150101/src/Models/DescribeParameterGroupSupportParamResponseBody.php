<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterGroupSupportParamResponseBody\resourceList;

class DescribeParameterGroupSupportParamResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceList[]
     */
    public $resourceList;
    protected $_name = [
        'requestId' => 'RequestId',
        'resourceList' => 'ResourceList',
    ];

    public function validate()
    {
        if (\is_array($this->resourceList)) {
            Model::validateArray($this->resourceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceList) {
            if (\is_array($this->resourceList)) {
                $res['ResourceList'] = [];
                $n1 = 0;
                foreach ($this->resourceList as $item1) {
                    $res['ResourceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceList'])) {
            if (!empty($map['ResourceList'])) {
                $model->resourceList = [];
                $n1 = 0;
                foreach ($map['ResourceList'] as $item1) {
                    $model->resourceList[$n1] = resourceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
