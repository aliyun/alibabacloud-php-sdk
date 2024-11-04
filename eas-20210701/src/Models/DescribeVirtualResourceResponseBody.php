<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeVirtualResourceResponseBody\resources;
use AlibabaCloud\Tea\Model;

class DescribeVirtualResourceResponseBody extends Model
{
    /**
     * @description The time when the virtual resource group was created.
     *
     * @example 2024-10-16T17:52:49Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the request.
     *
     * @example 40325405-579C-4D82****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of resources in the virtual resource group.
     *
     * @var resources[]
     */
    public $resources;

    /**
     * @description The time when the virtual resource group was last updated.
     *
     * @example 2024-10-16T19:52:49Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The ID of the virtual resource group.
     *
     * @example eas-vr-npovr28onap1xxxxxx
     *
     * @var string
     */
    public $virtualResourceId;

    /**
     * @description The name of the virtual resource group.
     *
     * @example MyVirtualResource
     *
     * @var string
     */
    public $virtualResourceName;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'requestId'           => 'RequestId',
        'resources'           => 'Resources',
        'updateTime'          => 'UpdateTime',
        'virtualResourceId'   => 'VirtualResourceId',
        'virtualResourceName' => 'VirtualResourceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resources) {
            $res['Resources'] = [];
            if (null !== $this->resources && \is_array($this->resources)) {
                $n = 0;
                foreach ($this->resources as $item) {
                    $res['Resources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->virtualResourceId) {
            $res['VirtualResourceId'] = $this->virtualResourceId;
        }
        if (null !== $this->virtualResourceName) {
            $res['VirtualResourceName'] = $this->virtualResourceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVirtualResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n                = 0;
                foreach ($map['Resources'] as $item) {
                    $model->resources[$n++] = null !== $item ? resources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VirtualResourceId'])) {
            $model->virtualResourceId = $map['VirtualResourceId'];
        }
        if (isset($map['VirtualResourceName'])) {
            $model->virtualResourceName = $map['VirtualResourceName'];
        }

        return $model;
    }
}
