<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeModelsResponseBody\modelDetails;
use AlibabaCloud\Tea\Model;

class DescribeModelsResponseBody extends Model
{
    /**
     * @description The ID of the API group to which the model belongs.
     *
     * @var modelDetails
     */
    public $modelDetails;

    /**
     * @description The number of entries returned per page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The returned information about models. It is an array consisting of ModelDetail data.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of returned entries.
     *
     * @example 40306469-2FB5-417A-B723-AF1F4A4FA204
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The last modification time of the model.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'modelDetails' => 'ModelDetails',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelDetails) {
            $res['ModelDetails'] = null !== $this->modelDetails ? $this->modelDetails->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return DescribeModelsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelDetails'])) {
            $model->modelDetails = modelDetails::fromMap($map['ModelDetails']);
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
