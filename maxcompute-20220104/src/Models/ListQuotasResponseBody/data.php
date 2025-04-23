<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListQuotasResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListQuotasResponseBody\data\quotaInfoList;

class data extends Model
{
    /**
     * @var string
     */
    public $nextToken;

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
    protected $_name = [
        'nextToken' => 'NextToken',
        'marker' => 'marker',
        'maxItem' => 'maxItem',
        'quotaInfoList' => 'quotaInfoList',
    ];

    public function validate()
    {
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

        return $model;
    }
}
