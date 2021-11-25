<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListSecurityGroupsResponseBody\securityGroups;
use AlibabaCloud\Tea\Model;

class ListSecurityGroupsResponseBody extends Model
{
    /**
     * @description 请求Id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 代码源配置列表
     *
     * @var securityGroups[]
     */
    public $securityGroups;

    /**
     * @description 符合过滤条件的代码源配置的总数量
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'      => 'RequestId',
        'securityGroups' => 'SecurityGroups',
        'totalCount'     => 'TotalCount',
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
        if (null !== $this->securityGroups) {
            $res['SecurityGroups'] = [];
            if (null !== $this->securityGroups && \is_array($this->securityGroups)) {
                $n = 0;
                foreach ($this->securityGroups as $item) {
                    $res['SecurityGroups'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListSecurityGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityGroups'])) {
            if (!empty($map['SecurityGroups'])) {
                $model->securityGroups = [];
                $n                     = 0;
                foreach ($map['SecurityGroups'] as $item) {
                    $model->securityGroups[$n++] = null !== $item ? securityGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
