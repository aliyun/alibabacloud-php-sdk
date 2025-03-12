<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCloudProductFieldStatisticsResponseBody\groupedFields;
use AlibabaCloud\Tea\Model;

class DescribeCloudProductFieldStatisticsResponseBody extends Model
{
    /**
     * @description The statistics of cloud services that are protected by Security Center.
     *
     * @var groupedFields
     */
    public $groupedFields;

    /**
     * @description The ID of the request.
     *
     * @example 7E0618A9-D5EF-4220-9471-C42B5E92719F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groupedFields' => 'GroupedFields',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupedFields) {
            $res['GroupedFields'] = null !== $this->groupedFields ? $this->groupedFields->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudProductFieldStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupedFields'])) {
            $model->groupedFields = groupedFields::fromMap($map['GroupedFields']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
