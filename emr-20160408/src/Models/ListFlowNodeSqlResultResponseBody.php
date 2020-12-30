<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowNodeSqlResultResponseBody\headerList;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowNodeSqlResultResponseBody\rowList;
use AlibabaCloud\Tea\Model;

class ListFlowNodeSqlResultResponseBody extends Model
{
    /**
     * @var rowList
     */
    public $rowList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var headerList
     */
    public $headerList;

    /**
     * @var bool
     */
    public $end;
    protected $_name = [
        'rowList'    => 'RowList',
        'requestId'  => 'RequestId',
        'headerList' => 'HeaderList',
        'end'        => 'End',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rowList) {
            $res['RowList'] = null !== $this->rowList ? $this->rowList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->headerList) {
            $res['HeaderList'] = null !== $this->headerList ? $this->headerList->toMap() : null;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
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
        if (isset($map['RowList'])) {
            $model->rowList = rowList::fromMap($map['RowList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HeaderList'])) {
            $model->headerList = headerList::fromMap($map['HeaderList']);
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }

        return $model;
    }
}
