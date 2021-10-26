<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeModelsResponseBody\modelDetails;
use AlibabaCloud\Tea\Model;

class DescribeModelsResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var modelDetails
     */
    public $modelDetails;
    protected $_name = [
        'pageNumber'   => 'PageNumber',
        'requestId'    => 'RequestId',
        'pageSize'     => 'PageSize',
        'totalCount'   => 'TotalCount',
        'modelDetails' => 'ModelDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->modelDetails) {
            $res['ModelDetails'] = null !== $this->modelDetails ? $this->modelDetails->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeModelsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['ModelDetails'])) {
            $model->modelDetails = modelDetails::fromMap($map['ModelDetails']);
        }

        return $model;
    }
}
