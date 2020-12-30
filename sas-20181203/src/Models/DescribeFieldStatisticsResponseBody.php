<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeFieldStatisticsResponseBody\groupedFields;
use AlibabaCloud\Tea\Model;

class DescribeFieldStatisticsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var groupedFields
     */
    public $groupedFields;
    protected $_name = [
        'requestId'     => 'RequestId',
        'groupedFields' => 'GroupedFields',
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
        if (null !== $this->groupedFields) {
            $res['GroupedFields'] = null !== $this->groupedFields ? $this->groupedFields->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFieldStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['GroupedFields'])) {
            $model->groupedFields = groupedFields::fromMap($map['GroupedFields']);
        }

        return $model;
    }
}
