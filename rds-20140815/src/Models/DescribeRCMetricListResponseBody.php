<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeRCMetricListResponseBody extends Model
{
    /**
     * @description The HTTP status code returned.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The monitoring data.
     *
     * @example [{\\"timestamp\\":1722909960000,\\"instanceId\\":\\"rc-dh2jf9n6j4s14926****\\",\\"userId\\":\\"1695619988087373\\",\\"Minimum\\":0.097,\\"Maximum\\":0.097,\\"Average\\":0.097},{\\"timestamp\\":1722910020000,\\"instanceId\\":\\"rc-dh2jf9n6j4s14926****\\",\\"userId\\":\\"1695619988087373\\",\\"Minimum\\":0.093,\\"Maximum\\":0.093,\\"Average\\":0.093}]
     *
     * @var string
     */
    public $datapoints;

    /**
     * @description The message that is returned for the request.
     *
     * >  If the request is successful, **Successful** is returned. If the request fails, an error message that contains information such as an error code is returned.
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The pagination token.
     *
     * @example 6178f1825f9fb76ce0b5e8707e68181f
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The statistical period of the monitoring data.
     *
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @description The request ID.
     *
     * @example EA2D4F34-01A7-46EB-A339-D80882135206
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'       => 'Code',
        'datapoints' => 'Datapoints',
        'message'    => 'Message',
        'nextToken'  => 'NextToken',
        'period'     => 'Period',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
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
        if (null !== $this->datapoints) {
            $res['Datapoints'] = $this->datapoints;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRCMetricListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Datapoints'])) {
            $model->datapoints = $map['Datapoints'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
