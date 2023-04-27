<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyInstancesStatusResponseBody\policies;

use AlibabaCloud\Tea\Model;

class severityInfo extends Model
{
    /**
     * @example 2
     *
     * @var string
     */
    public $severityCount;

    /**
     * @example low
     *
     * @var string
     */
    public $severityType;
    protected $_name = [
        'severityCount' => 'SeverityCount',
        'severityType'  => 'SeverityType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->severityCount) {
            $res['SeverityCount'] = $this->severityCount;
        }
        if (null !== $this->severityType) {
            $res['SeverityType'] = $this->severityType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return severityInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SeverityCount'])) {
            $model->severityCount = $map['SeverityCount'];
        }
        if (isset($map['SeverityType'])) {
            $model->severityType = $map['SeverityType'];
        }

        return $model;
    }
}
