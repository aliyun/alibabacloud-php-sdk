<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\PageQuerySharedSpeechOpenResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\PageQuerySharedSpeechOpenResponseBody\data\resultData;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $pageId;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var resultData
     */
    public $resultData;

    /**
     * @example 100
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'pageId'     => 'PageId',
        'pageSize'   => 'PageSize',
        'resultData' => 'ResultData',
        'total'      => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageId) {
            $res['PageId'] = $this->pageId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resultData) {
            $res['ResultData'] = null !== $this->resultData ? $this->resultData->toMap() : null;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageId'])) {
            $model->pageId = $map['PageId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResultData'])) {
            $model->resultData = resultData::fromMap($map['ResultData']);
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
