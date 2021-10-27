<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\ListUserReportsResponseBody\sqlComparisonReport;
use AlibabaCloud\Tea\Model;

class ListUserReportsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var sqlComparisonReport
     */
    public $sqlComparisonReport;
    protected $_name = [
        'requestId'           => 'RequestId',
        'success'             => 'Success',
        'sqlComparisonReport' => 'sqlComparisonReport',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->sqlComparisonReport) {
            $res['sqlComparisonReport'] = null !== $this->sqlComparisonReport ? $this->sqlComparisonReport->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserReportsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['sqlComparisonReport'])) {
            $model->sqlComparisonReport = sqlComparisonReport::fromMap($map['sqlComparisonReport']);
        }

        return $model;
    }
}
