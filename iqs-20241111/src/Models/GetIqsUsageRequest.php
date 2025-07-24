<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Tea\Model;

class GetIqsUsageRequest extends Model
{
    /**
     * @example 20241017
     *
     * @var string
     */
    public $endDate;

    /**
     * @example 20241011
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'endDate' => 'endDate',
        'startDate' => 'startDate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }
        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIqsUsageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }
        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }

        return $model;
    }
}
