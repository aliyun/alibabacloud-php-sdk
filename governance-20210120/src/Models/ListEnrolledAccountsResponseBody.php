<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEnrolledAccountsResponseBody\enrolledAccounts;

class ListEnrolledAccountsResponseBody extends Model
{
    /**
     * @var enrolledAccounts[]
     */
    public $enrolledAccounts;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'enrolledAccounts' => 'EnrolledAccounts',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->enrolledAccounts)) {
            Model::validateArray($this->enrolledAccounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enrolledAccounts) {
            if (\is_array($this->enrolledAccounts)) {
                $res['EnrolledAccounts'] = [];
                $n1 = 0;
                foreach ($this->enrolledAccounts as $item1) {
                    $res['EnrolledAccounts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnrolledAccounts'])) {
            if (!empty($map['EnrolledAccounts'])) {
                $model->enrolledAccounts = [];
                $n1 = 0;
                foreach ($map['EnrolledAccounts'] as $item1) {
                    $model->enrolledAccounts[$n1++] = enrolledAccounts::fromMap($item1);
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
