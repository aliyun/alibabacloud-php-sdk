<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenGeographicSpansResponseBody\geographicSpanModels;

class DescribeCenGeographicSpansResponseBody extends Model
{
    /**
     * @var geographicSpanModels
     */
    public $geographicSpanModels;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'geographicSpanModels' => 'GeographicSpanModels',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->geographicSpanModels) {
            $this->geographicSpanModels->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->geographicSpanModels) {
            $res['GeographicSpanModels'] = null !== $this->geographicSpanModels ? $this->geographicSpanModels->toArray($noStream) : $this->geographicSpanModels;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['GeographicSpanModels'])) {
            $model->geographicSpanModels = geographicSpanModels::fromMap($map['GeographicSpanModels']);
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
