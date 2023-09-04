<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListPermissionPoliciesInAccessConfigurationResponseBody\permissionPolicies;
use AlibabaCloud\Tea\Model;

class ListPermissionPoliciesInAccessConfigurationResponseBody extends Model
{
    /**
     * @description The policies.
     *
     * @var permissionPolicies[]
     */
    public $permissionPolicies;

    /**
     * @description The ID of the request.
     *
     * @example 3A5E771F-1F5A-5555-A64E-579748AAFD98
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of policies.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCounts;
    protected $_name = [
        'permissionPolicies' => 'PermissionPolicies',
        'requestId'          => 'RequestId',
        'totalCounts'        => 'TotalCounts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->permissionPolicies) {
            $res['PermissionPolicies'] = [];
            if (null !== $this->permissionPolicies && \is_array($this->permissionPolicies)) {
                $n = 0;
                foreach ($this->permissionPolicies as $item) {
                    $res['PermissionPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCounts) {
            $res['TotalCounts'] = $this->totalCounts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPermissionPoliciesInAccessConfigurationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PermissionPolicies'])) {
            if (!empty($map['PermissionPolicies'])) {
                $model->permissionPolicies = [];
                $n                         = 0;
                foreach ($map['PermissionPolicies'] as $item) {
                    $model->permissionPolicies[$n++] = null !== $item ? permissionPolicies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCounts'])) {
            $model->totalCounts = $map['TotalCounts'];
        }

        return $model;
    }
}
