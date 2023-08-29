<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DeleteScheduleRequest extends Model
{
    /**
     * @example testFlowName
     *
     * @var string
     */
    public $flowName;

    /**
     * @example testRequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @example testScheduleName
     *
     * @var string
     */
    public $scheduleName;
    protected $_name = [
        'flowName'     => 'FlowName',
        'requestId'    => 'RequestId',
        'scheduleName' => 'ScheduleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scheduleName) {
            $res['ScheduleName'] = $this->scheduleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteScheduleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScheduleName'])) {
            $model->scheduleName = $map['ScheduleName'];
        }

        return $model;
    }
}
