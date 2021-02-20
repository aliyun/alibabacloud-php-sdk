<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\ListApplicationsResponseBody\applications;
use AlibabaCloud\Tea\Model;

class ListApplicationsResponseBody extends Model
{
    /**
     * @var applications
     */
    public $applications;

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
        'applications' => 'Applications',
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
        if (null !== $this->applications) {
            $res['Applications'] = null !== $this->applications ? $this->applications->toMap() : null;
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
     * @return ListApplicationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Applications'])) {
            $model->applications = applications::fromMap($map['Applications']);
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
