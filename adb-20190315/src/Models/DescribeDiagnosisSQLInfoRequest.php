<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiagnosisSQLInfoRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * This parameter is required.
     * @example am-bp1r053byu48p****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The language of file titles and error messages. Valid values:
     *
     *   **zh**: simplified Chinese
     *   **en**: English
     *   **ja**: Japanese
     *   **zh-tw**: traditional Chinese
     *
     * This parameter is required.
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the query.
     *
     * This parameter is required.
     * @example 2021070216432217201616806503453******
     *
     * @var string
     */
    public $processId;

    /**
     * @description The IP address and port number of the AnalyticDB for MySQL frontend node on which the SQL statement is executed.
     *
     * >  You can call the [DescribeDiagnosisRecords](https://help.aliyun.com/document_detail/308207.html) operation to query the SQL summary information of a specified AnalyticDB for MySQL cluster, including the IP address and port number of the frontend node.
     * @example 192.45.***.***:3145
     *
     * @var string
     */
    public $processRcHost;

    /**
     * @description The execution start time of the SQL statement. Specify the time in the UNIX timestamp format. Unit: milliseconds.
     *
     * >  You can call the [DescribeDiagnosisRecords](https://help.aliyun.com/document_detail/308207.html) operation to query the SQL summary information of a specified AnalyticDB for MySQL cluster, including the execution start time of the SQL statement.
     * @example 1625215402000
     *
     * @var int
     */
    public $processStartTime;

    /**
     * @description The state of the SQL statement. Valid values:
     *
     *   **running**
     *
     *   **finished**
     *
     *   **failed**
     *
     * > You can call the [DescribeDiagnosisRecords](https://help.aliyun.com/document_detail/308207.html) operation to query the SQL summary information of a specified AnalyticDB for MySQL cluster, including the state of the SQL statement.
     * @example running
     *
     * @var string
     */
    public $processState;

    /**
     * @description The region ID of the cluster.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBClusterId'      => 'DBClusterId',
        'lang'             => 'Lang',
        'processId'        => 'ProcessId',
        'processRcHost'    => 'ProcessRcHost',
        'processStartTime' => 'ProcessStartTime',
        'processState'     => 'ProcessState',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->processRcHost) {
            $res['ProcessRcHost'] = $this->processRcHost;
        }
        if (null !== $this->processStartTime) {
            $res['ProcessStartTime'] = $this->processStartTime;
        }
        if (null !== $this->processState) {
            $res['ProcessState'] = $this->processState;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiagnosisSQLInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['ProcessRcHost'])) {
            $model->processRcHost = $map['ProcessRcHost'];
        }
        if (isset($map['ProcessStartTime'])) {
            $model->processStartTime = $map['ProcessStartTime'];
        }
        if (isset($map['ProcessState'])) {
            $model->processState = $map['ProcessState'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
