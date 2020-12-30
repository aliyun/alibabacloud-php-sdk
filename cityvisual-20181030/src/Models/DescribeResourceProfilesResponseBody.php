<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeResourceProfilesResponseBody\resourceProfiles;
use AlibabaCloud\Tea\Model;

class DescribeResourceProfilesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

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
    public $pageNumber;

    /**
     * @var resourceProfiles
     */
    public $resourceProfiles;
    protected $_name = [
        'totalCount'       => 'TotalCount',
        'requestId'        => 'RequestId',
        'pageSize'         => 'PageSize',
        'pageNumber'       => 'PageNumber',
        'resourceProfiles' => 'ResourceProfiles',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->resourceProfiles) {
            $res['ResourceProfiles'] = null !== $this->resourceProfiles ? $this->resourceProfiles->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceProfilesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['ResourceProfiles'])) {
            $model->resourceProfiles = resourceProfiles::fromMap($map['ResourceProfiles']);
        }

        return $model;
    }
}
