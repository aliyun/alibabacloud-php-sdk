<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeResourceGroupsResponseBody\resourceGroup;

class DescribeResourceGroupsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceGroup[]
     */
    public $resourceGroup;

    /**
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'resourceGroup' => 'ResourceGroup',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->resourceGroup)) {
            Model::validateArray($this->resourceGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroup) {
            if (\is_array($this->resourceGroup)) {
                $res['ResourceGroup'] = [];
                $n1 = 0;
                foreach ($this->resourceGroup as $item1) {
                    $res['ResourceGroup'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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

        if (isset($map['ResourceGroup'])) {
            if (!empty($map['ResourceGroup'])) {
                $model->resourceGroup = [];
                $n1 = 0;
                foreach ($map['ResourceGroup'] as $item1) {
                    $model->resourceGroup[$n1] = resourceGroup::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
