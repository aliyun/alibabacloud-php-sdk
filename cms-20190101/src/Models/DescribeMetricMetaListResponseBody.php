<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricMetaListResponseBody\resources;
use AlibabaCloud\Tea\Model;

class DescribeMetricMetaListResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The total number of returned records.
     *
     * @example The Request is not authorization.
     *
     * @var string
     */
    public $message;

    /**
     * @description Indicates whether the request was successful. The value true indicates success. The value false indicates failure.
     *
     * @example 0CCE0AF0-053C-4B13-A583-DC9A85785D49
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The description of the metric.
     *
     * @var resources
     */
    public $resources;

    /**
     * @description The name of the metric.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The configuration of the metric.
     *
     * @example 12
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'code'       => 'Code',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'resources'  => 'Resources',
        'success'    => 'Success',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resources) {
            $res['Resources'] = null !== $this->resources ? $this->resources->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMetricMetaListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Resources'])) {
            $model->resources = resources::fromMap($map['Resources']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
