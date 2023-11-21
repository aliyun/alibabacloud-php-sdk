<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeAnalyticdbByPrimaryDBInstanceResponseBody extends Model
{
    /**
     * @description The number of associated analytic instances.
     *
     * @example 0
     *
     * @var int
     */
    public $analyticDBCount;

    /**
     * @description The request ID.
     *
     * @example 77862BFF-ED59-552A-A2E8-692FEAFC9527
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'analyticDBCount' => 'AnalyticDBCount',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analyticDBCount) {
            $res['AnalyticDBCount'] = $this->analyticDBCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAnalyticdbByPrimaryDBInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnalyticDBCount'])) {
            $model->analyticDBCount = $map['AnalyticDBCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
