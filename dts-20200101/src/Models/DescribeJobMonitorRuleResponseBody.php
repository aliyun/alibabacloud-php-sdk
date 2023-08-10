<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeJobMonitorRuleResponseBody\monitorRules;
use AlibabaCloud\Tea\Model;

class DescribeJobMonitorRuleResponseBody extends Model
{
    /**
     * @description The error code. This parameter will be removed in the future.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The ID of the data migration, data synchronization, or change tracking task.
     *
     * @example ta7w132u12h****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The dynamic part in the error message. This parameter is used to replace the **%s** variable in the **ErrMessage** parameter.
     *
     * >  If the specified **DtsJobId** parameter is invalid, **The Value of Input Parameter %s is not valid** is returned for **ErrMessage** and **DtsJobId** is returned for **DynamicMessage**.
     * @example DtsJobId
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @description The error code returned if the call failed.
     *
     * @example 403
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message returned if the call failed.
     *
     * @example The Value of Input Parameter %s is not valid.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The monitoring rules of the DTS task.
     *
     * @var monitorRules[]
     */
    public $monitorRules;

    /**
     * @description The ID of the request.
     *
     * @example 0CA14388-DD89-4A7B-8CDD-884A10CE****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call was successful. Valid values:
     *
     *   **true**: The call was successful.
     *   **false**:The call failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The topics of all subtasks in the distributed change tracking task.
     *
     * @var string[]
     */
    public $topics;
    protected $_name = [
        'code'           => 'Code',
        'dtsJobId'       => 'DtsJobId',
        'dynamicMessage' => 'DynamicMessage',
        'errCode'        => 'ErrCode',
        'errMessage'     => 'ErrMessage',
        'httpStatusCode' => 'HttpStatusCode',
        'monitorRules'   => 'MonitorRules',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'topics'         => 'Topics',
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
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->dynamicMessage) {
            $res['DynamicMessage'] = $this->dynamicMessage;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->monitorRules) {
            $res['MonitorRules'] = [];
            if (null !== $this->monitorRules && \is_array($this->monitorRules)) {
                $n = 0;
                foreach ($this->monitorRules as $item) {
                    $res['MonitorRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->topics) {
            $res['Topics'] = $this->topics;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeJobMonitorRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['DynamicMessage'])) {
            $model->dynamicMessage = $map['DynamicMessage'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['MonitorRules'])) {
            if (!empty($map['MonitorRules'])) {
                $model->monitorRules = [];
                $n                   = 0;
                foreach ($map['MonitorRules'] as $item) {
                    $model->monitorRules[$n++] = null !== $item ? monitorRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Topics'])) {
            if (!empty($map['Topics'])) {
                $model->topics = $map['Topics'];
            }
        }

        return $model;
    }
}
