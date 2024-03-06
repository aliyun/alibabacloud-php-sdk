<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\ListApplicationAccessPointsResponseBody\applicationAccessPoints;
use AlibabaCloud\Tea\Model;

class ListApplicationAccessPointsResponseBody extends Model
{
    /**
     * @description A list of AAPs.
     *
     * @var applicationAccessPoints
     */
    public $applicationAccessPoints;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example bcfefe15-46f0-44a3-bd96-3d422474b71a
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'applicationAccessPoints' => 'ApplicationAccessPoints',
        'pageNumber'              => 'PageNumber',
        'pageSize'                => 'PageSize',
        'requestId'               => 'RequestId',
        'totalCount'              => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationAccessPoints) {
            $res['ApplicationAccessPoints'] = null !== $this->applicationAccessPoints ? $this->applicationAccessPoints->toMap() : null;
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
     * @return ListApplicationAccessPointsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationAccessPoints'])) {
            $model->applicationAccessPoints = applicationAccessPoints::fromMap($map['ApplicationAccessPoints']);
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
