<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetStreamTagListResponseBody\streamTagList;

class GetStreamTagListResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var streamTagList[]
     */
    public $streamTagList;

    /**
     * @var string
     */
    public $success;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'code' => 'Code',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'streamTagList' => 'StreamTagList',
        'success' => 'Success',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->streamTagList)) {
            Model::validateArray($this->streamTagList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->streamTagList) {
            if (\is_array($this->streamTagList)) {
                $res['StreamTagList'] = [];
                $n1 = 0;
                foreach ($this->streamTagList as $item1) {
                    $res['StreamTagList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StreamTagList'])) {
            if (!empty($map['StreamTagList'])) {
                $model->streamTagList = [];
                $n1 = 0;
                foreach ($map['StreamTagList'] as $item1) {
                    $model->streamTagList[$n1] = streamTagList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
