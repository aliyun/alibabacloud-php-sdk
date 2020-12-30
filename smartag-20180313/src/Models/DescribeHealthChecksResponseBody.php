<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeHealthChecksResponseBody\healthChecks;
use AlibabaCloud\Tea\Model;

class DescribeHealthChecksResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

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
    public $pageNumber;

    /**
     * @var healthChecks
     */
    public $healthChecks;
    protected $_name = [
        'totalCount'   => 'TotalCount',
        'pageSize'     => 'PageSize',
        'requestId'    => 'RequestId',
        'pageNumber'   => 'PageNumber',
        'healthChecks' => 'HealthChecks',
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->healthChecks) {
            $res['HealthChecks'] = null !== $this->healthChecks ? $this->healthChecks->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHealthChecksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['HealthChecks'])) {
            $model->healthChecks = healthChecks::fromMap($map['HealthChecks']);
        }

        return $model;
    }
}
