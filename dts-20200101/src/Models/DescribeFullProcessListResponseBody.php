<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeFullProcessListResponseBody\fullProcessList;
use AlibabaCloud\Tea\Model;

class DescribeFullProcessListResponseBody extends Model
{
    /**
     * @description The error code.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The throttling configuration. Valid values:
     *
     *   **dts.datamove.blaster.qps.max**: The rate at which queries are made to the source database per second.
     *   **dts.datamove.source.rps.max**: the number of rows that are fully synchronized or migrated per second.
     *   **dts.datamove.source.bps.max**: the amount of data processed per second for full synchronization or migration. Unit: Byte/s.
     *
     * >
     *
     *   When you set the **JobCode** parameter to **03**, you need to specify the **EnableLimit** parameter as **true**. Otherwise, the configuration cannot take effect.
     *
     *   When you set the **JobCode** parameter to **04** or **07**, you only need to specify the **dts.datamove.source.rps.max** and **dts.datamove.source.bps.max** parameters.
     *   A value of \\*\\*-1\\*\\* indicates no rate limit.
     *
     * @example {
     * "dts.datamove.source.rps.max": 5000,
     * "dts.datamove.source.bps.max": 10485760
     * }
     *
     * @var mixed[]
     */
    public $configList;

    /**
     * @description The ID of the data migration, data synchronization, or change tracking task.
     *
     * @example i03e3zty16i****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The dynamic part in the error message. This parameter is used to replace the \\*\\*%s\\*\\* variable in the **ErrMessage** parameter.
     *
     * >  The request parameter **DtsJobId** is invalid if **The Value of Input Parameter %s is not valid** is returned for **ErrMessage** and **DtsJobId** is returned for **DynamicMessage**.
     *
     * @example DtsJobId
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @description The error code returned when the request failed.
     *
     * @example InternalError
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message returned when the request failed.
     *
     * @example The request processing has failed due to some unknown error.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The details of the GA instances.
     *
     * @var fullProcessList[]
     */
    public $fullProcessList;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The request ID.
     *
     * @example C166D79D-436B-45F0-B5A5-25E1959F****
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
        'code' => 'Code',
        'configList' => 'ConfigList',
        'dtsJobId' => 'DtsJobId',
        'dynamicMessage' => 'DynamicMessage',
        'errCode' => 'ErrCode',
        'errMessage' => 'ErrMessage',
        'fullProcessList' => 'FullProcessList',
        'httpStatusCode' => 'HttpStatusCode',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->configList) {
            $res['ConfigList'] = $this->configList;
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
        if (null !== $this->fullProcessList) {
            $res['FullProcessList'] = [];
            if (null !== $this->fullProcessList && \is_array($this->fullProcessList)) {
                $n = 0;
                foreach ($this->fullProcessList as $item) {
                    $res['FullProcessList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
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
     * @return DescribeFullProcessListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ConfigList'])) {
            $model->configList = $map['ConfigList'];
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
        if (isset($map['FullProcessList'])) {
            if (!empty($map['FullProcessList'])) {
                $model->fullProcessList = [];
                $n = 0;
                foreach ($map['FullProcessList'] as $item) {
                    $model->fullProcessList[$n++] = null !== $item ? fullProcessList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
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
