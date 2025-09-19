<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeFieldStatisticsResponseBody\groupedFields;

class DescribeFieldStatisticsResponseBody extends Model
{
    /**
     * @var groupedFields
     */
    public $groupedFields;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groupedFields' => 'GroupedFields',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->groupedFields) {
            $this->groupedFields->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupedFields) {
            $res['GroupedFields'] = null !== $this->groupedFields ? $this->groupedFields->toArray($noStream) : $this->groupedFields;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
