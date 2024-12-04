<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourceGroupsResponseBody\resourceGroupList;
use AlibabaCloud\Tea\Model;

class ListResourceGroupsResponseBody extends Model
{
    /**
     * @description The request ID. You can use the ID to query logs and troubleshoot issues.
     *
     * @example 6A6CBE87-9F91-1323-B680-E7A7065XXXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The resource groups returned.
     *
     * @var resourceGroupList[]
     */
    public $resourceGroupList;

    /**
     * @description Indicates whether the request was successful. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId'         => 'RequestId',
        'resourceGroupList' => 'ResourceGroupList',
        'success'           => 'Success',
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
        if (null !== $this->resourceGroupList) {
            $res['ResourceGroupList'] = [];
            if (null !== $this->resourceGroupList && \is_array($this->resourceGroupList)) {
                $n = 0;
                foreach ($this->resourceGroupList as $item) {
                    $res['ResourceGroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupList'])) {
            if (!empty($map['ResourceGroupList'])) {
                $model->resourceGroupList = [];
                $n                        = 0;
                foreach ($map['ResourceGroupList'] as $item) {
                    $model->resourceGroupList[$n++] = null !== $item ? resourceGroupList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
