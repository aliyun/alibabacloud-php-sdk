<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\QueryAuthUserConnectDurationListResponseBody\authUserConnectDurationList;

class QueryAuthUserConnectDurationListResponseBody extends Model
{
    /**
     * @var authUserConnectDurationList[]
     */
    public $authUserConnectDurationList;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'authUserConnectDurationList' => 'AuthUserConnectDurationList',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->authUserConnectDurationList)) {
            Model::validateArray($this->authUserConnectDurationList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authUserConnectDurationList) {
            if (\is_array($this->authUserConnectDurationList)) {
                $res['AuthUserConnectDurationList'] = [];
                $n1 = 0;
                foreach ($this->authUserConnectDurationList as $item1) {
                    $res['AuthUserConnectDurationList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AuthUserConnectDurationList'])) {
            if (!empty($map['AuthUserConnectDurationList'])) {
                $model->authUserConnectDurationList = [];
                $n1 = 0;
                foreach ($map['AuthUserConnectDurationList'] as $item1) {
                    $model->authUserConnectDurationList[$n1] = authUserConnectDurationList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
