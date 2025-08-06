<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\ListAnycastEipAddressesResponseBody\anycastList;

class ListAnycastEipAddressesResponseBody extends Model
{
    /**
     * @var anycastList[]
     */
    public $anycastList;

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
        'anycastList' => 'AnycastList',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->anycastList)) {
            Model::validateArray($this->anycastList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anycastList) {
            if (\is_array($this->anycastList)) {
                $res['AnycastList'] = [];
                $n1 = 0;
                foreach ($this->anycastList as $item1) {
                    $res['AnycastList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AnycastList'])) {
            if (!empty($map['AnycastList'])) {
                $model->anycastList = [];
                $n1 = 0;
                foreach ($map['AnycastList'] as $item1) {
                    $model->anycastList[$n1] = anycastList::fromMap($item1);
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
