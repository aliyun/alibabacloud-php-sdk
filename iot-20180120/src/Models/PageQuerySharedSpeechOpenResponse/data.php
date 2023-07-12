<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\PageQuerySharedSpeechOpenResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\PageQuerySharedSpeechOpenResponse\data\resultData;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $pageId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $total;

    /**
     * @var resultData
     */
    public $resultData;
    protected $_name = [
        'pageId'     => 'PageId',
        'pageSize'   => 'PageSize',
        'total'      => 'Total',
        'resultData' => 'ResultData',
    ];

    public function validate()
    {
        Model::validateRequired('pageId', $this->pageId, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('resultData', $this->resultData, true);
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
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->resultData) {
            $res['ResultData'] = null !== $this->resultData ? $this->resultData->toMap() : null;
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
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['ResultData'])) {
            $model->resultData = resultData::fromMap($map['ResultData']);
        }

        return $model;
    }
}
