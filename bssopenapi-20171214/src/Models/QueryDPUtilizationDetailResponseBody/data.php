<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryDPUtilizationDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryDPUtilizationDetailResponseBody\data\detailList;

class data extends Model
{
    /**
     * @var detailList
     */
    public $detailList;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'detailList' => 'DetailList',
        'nextToken' => 'NextToken',
    ];

    public function validate()
    {
        if (null !== $this->detailList) {
            $this->detailList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detailList) {
            $res['DetailList'] = null !== $this->detailList ? $this->detailList->toArray($noStream) : $this->detailList;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['DetailList'])) {
            $model->detailList = detailList::fromMap($map['DetailList']);
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
