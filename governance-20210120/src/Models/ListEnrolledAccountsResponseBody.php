<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models;

use AlibabaCloud\SDK\Governance\V20210120\Models\ListEnrolledAccountsResponseBody\enrolledAccounts;
use AlibabaCloud\Tea\Model;

class ListEnrolledAccountsResponseBody extends Model
{
    /**
     * @description 账号列表
     *
     * @var enrolledAccounts[]
     */
    public $enrolledAccounts;

    /**
     * @description 查询返回结果下一页的令牌
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'enrolledAccounts' => 'EnrolledAccounts',
        'nextToken'        => 'NextToken',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enrolledAccounts) {
            $res['EnrolledAccounts'] = [];
            if (null !== $this->enrolledAccounts && \is_array($this->enrolledAccounts)) {
                $n = 0;
                foreach ($this->enrolledAccounts as $item) {
                    $res['EnrolledAccounts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEnrolledAccountsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnrolledAccounts'])) {
            if (!empty($map['EnrolledAccounts'])) {
                $model->enrolledAccounts = [];
                $n                       = 0;
                foreach ($map['EnrolledAccounts'] as $item) {
                    $model->enrolledAccounts[$n++] = null !== $item ? enrolledAccounts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
