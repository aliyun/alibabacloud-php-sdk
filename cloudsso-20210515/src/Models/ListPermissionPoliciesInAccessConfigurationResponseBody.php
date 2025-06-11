<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListPermissionPoliciesInAccessConfigurationResponseBody\permissionPolicies;

class ListPermissionPoliciesInAccessConfigurationResponseBody extends Model
{
    /**
     * @var permissionPolicies[]
     */
    public $permissionPolicies;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCounts;
    protected $_name = [
        'permissionPolicies' => 'PermissionPolicies',
        'requestId' => 'RequestId',
        'totalCounts' => 'TotalCounts',
    ];

    public function validate()
    {
        if (\is_array($this->permissionPolicies)) {
            Model::validateArray($this->permissionPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->permissionPolicies) {
            if (\is_array($this->permissionPolicies)) {
                $res['PermissionPolicies'] = [];
                $n1 = 0;
                foreach ($this->permissionPolicies as $item1) {
                    $res['PermissionPolicies'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PermissionPolicies'])) {
            if (!empty($map['PermissionPolicies'])) {
                $model->permissionPolicies = [];
                $n1 = 0;
                foreach ($map['PermissionPolicies'] as $item1) {
                    $model->permissionPolicies[$n1++] = permissionPolicies::fromMap($item1);
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
