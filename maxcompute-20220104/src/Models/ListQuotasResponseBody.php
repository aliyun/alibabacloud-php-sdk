<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListQuotasResponseBody\data;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListQuotasResponseBody\quotaInfoList;

class ListQuotasResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var data
     */
    public $data;

    /**
     * @var string
     */
    public $marker;

    /**
     * @var int
     */
    public $maxItem;

    /**
     * @var quotaInfoList[]
     */
    public $quotaInfoList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken' => 'NextToken',
        'data' => 'data',
        'marker' => 'marker',
        'maxItem' => 'maxItem',
        'quotaInfoList' => 'quotaInfoList',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->data) {
            $this->data->validate();
        }
        if (\is_array($this->quotaInfoList)) {
            Model::validateArray($this->quotaInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toArray($noStream) : $this->data;
        }

        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }

        if (null !== $this->maxItem) {
            $res['maxItem'] = $this->maxItem;
        }

        if (null !== $this->quotaInfoList) {
            if (\is_array($this->quotaInfoList)) {
                $res['quotaInfoList'] = [];
                $n1 = 0;
                foreach ($this->quotaInfoList as $item1) {
                    $res['quotaInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }

        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }

        if (isset($map['maxItem'])) {
            $model->maxItem = $map['maxItem'];
        }

        if (isset($map['quotaInfoList'])) {
            if (!empty($map['quotaInfoList'])) {
                $model->quotaInfoList = [];
                $n1 = 0;
                foreach ($map['quotaInfoList'] as $item1) {
                    $model->quotaInfoList[$n1++] = quotaInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
