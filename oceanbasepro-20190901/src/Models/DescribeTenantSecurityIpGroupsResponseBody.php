<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantSecurityIpGroupsResponseBody\securityIpGroups;
use AlibabaCloud\Tea\Model;

class DescribeTenantSecurityIpGroupsResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 473469**-AA6F-4D**-B3DB-A***********
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of the whitelist groups.
     *
     * @var securityIpGroups[]
     */
    public $securityIpGroups;

    /**
     * @description The total number of the whitelist groups.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'        => 'RequestId',
        'securityIpGroups' => 'SecurityIpGroups',
        'totalCount'       => 'TotalCount',
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
        if (null !== $this->securityIpGroups) {
            $res['SecurityIpGroups'] = [];
            if (null !== $this->securityIpGroups && \is_array($this->securityIpGroups)) {
                $n = 0;
                foreach ($this->securityIpGroups as $item) {
                    $res['SecurityIpGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTenantSecurityIpGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityIpGroups'])) {
            if (!empty($map['SecurityIpGroups'])) {
                $model->securityIpGroups = [];
                $n                       = 0;
                foreach ($map['SecurityIpGroups'] as $item) {
                    $model->securityIpGroups[$n++] = null !== $item ? securityIpGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
