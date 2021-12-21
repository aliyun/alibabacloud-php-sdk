<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowNodeSqlResultResponseBody\headerList;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowNodeSqlResultResponseBody\rowList;
use AlibabaCloud\Tea\Model;

class ListFlowNodeSqlResultResponseBody extends Model
{
    /**
     * @var bool
     */
    public $end;

    /**
     * @var headerList
     */
    public $headerList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var rowList
     */
    public $rowList;
    protected $_name = [
        'end'        => 'End',
        'headerList' => 'HeaderList',
        'requestId'  => 'RequestId',
        'rowList'    => 'RowList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->headerList) {
            $res['HeaderList'] = null !== $this->headerList ? $this->headerList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->rowList) {
            $res['RowList'] = null !== $this->rowList ? $this->rowList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFlowNodeSqlResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['HeaderList'])) {
            $model->headerList = headerList::fromMap($map['HeaderList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RowList'])) {
            $model->rowList = rowList::fromMap($map['RowList']);
        }

        return $model;
    }
}
