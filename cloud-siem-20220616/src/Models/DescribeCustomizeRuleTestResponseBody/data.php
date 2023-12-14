<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCustomizeRuleTestResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the rule.
     *
     * @example 123456789
     *
     * @var int
     */
    public $id;

    /**
     * @description The historical data that is used in the simulation test.
     *
     * @example [{"key1":"value1","key2":"value2","key3":"value3","key4":"value4","key5":"value5"}]
     *
     * @var string
     */
    public $simulateData;

    /**
     * @description The status of the rule. Valid values:
     *
     *   0: The rule is in the initial state.
     *   10: The simulation data is tested.
     *   15: The business data is being tested.
     *   20: The business data test ends.
     *   100: The rule takes effect.
     *
     * @example 0
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'id'           => 'Id',
        'simulateData' => 'SimulateData',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->simulateData) {
            $res['SimulateData'] = $this->simulateData;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['SimulateData'])) {
            $model->simulateData = $map['SimulateData'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
