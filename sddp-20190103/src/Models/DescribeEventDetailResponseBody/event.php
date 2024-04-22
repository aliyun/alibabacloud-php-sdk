<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event\detail;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event\handleInfoList;
use AlibabaCloud\Tea\Model;

class event extends Model
{
    /**
     * @description The time when the alert for the anomalous event was generated. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1545829129000
     *
     * @var int
     */
    public $alertTime;

    /**
     * @description Indicates whether the handling result of the anomalous event is used to enhance the detection of anomalous events. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * > If you enhance the detection of anomalous events, the detection accuracy and the rate of triggering alerts for anomalous events are improved.
     * @example false
     *
     * @var bool
     */
    public $backed;

    /**
     * @description The instance name of the service in which the anomalous event was detected.
     *
     * @example in-222***
     *
     * @var string
     */
    public $dataInstance;

    /**
     * @description The display name of the account that is used to handle the anomalous event.
     *
     * @example yundunsr
     *
     * @var string
     */
    public $dealDisplayName;

    /**
     * @description The username of the account that is used to handle the anomalous event.
     *
     * @example det1111
     *
     * @var string
     */
    public $dealLoginName;

    /**
     * @description The reason why the anomalous event is handled.
     *
     * @example Anomaly confirmed
     *
     * @var string
     */
    public $dealReason;

    /**
     * @description The time when the anomalous event was handled. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1230000
     *
     * @var int
     */
    public $dealTime;

    /**
     * @description The ID of the account that is used to handle the anomalous event.
     *
     * @example 229157443385014***
     *
     * @var int
     */
    public $dealUserId;

    /**
     * @description The content in the details of the anomalous event.
     *
     * @var detail
     */
    public $detail;

    /**
     * @description The display name of the account that triggered the anomalous event.
     *
     * @example yundunsr
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The time when the anomalous event occurred. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1545829129000
     *
     * @var int
     */
    public $eventTime;

    /**
     * @description An array that consists of the handling records of the anomalous event.
     *
     * @var handleInfoList[]
     */
    public $handleInfoList;

    /**
     * @description The unique ID of the anomalous event.
     *
     * @example 52234
     *
     * @var int
     */
    public $id;

    /**
     * @description The details of the alert logs.
     *
     * @example {"client_ip": ["106.11.XX.XX", "106.11.XX.XX", "106.11.XX.XX", "106.11.XX.XX", "106.11.XX.XX", "106.11.XX.XX", "106.11.XX.XX", "106.11.XX.XX", "106.11.XX.XX"], "start_time": "2020-05-10 00:00:01", "instance": ["omniscience-data", "punish-beaver-data"], "end_time": "2020-05-10 00:21:22", "client_ua": ["Java/1.8.0_152", "Java/1.8.0_92", "aliyun-sdk-java/2.0.0", "aliyun-sdk-java/2.8.0(Linux/4.9.151-015.ali3000.alios7.x86_64/amd64;1.8.0_152)"], "user_name": 1512222261295262}
     *
     * @var string
     */
    public $logDetail;

    /**
     * @description The username of the account that triggered the anomalous event.
     *
     * @example det1111
     *
     * @var string
     */
    public $loginName;

    /**
     * @var bool
     */
    public $newAlarm;

    /**
     * @description The name of the service in which the anomalous event was detected. Valid values include **MaxCompute, OSS, ADS, OTS, and RDS**.
     *
     * @example MaxCompute
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The handling status for the anomalous event. Valid values:
     *
     *   **0**: unhandled
     *   **1**: confirmed
     *   **2**: marked as false positive
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The name of the handling status for the anomalous event.
     *
     * @example Pending
     *
     * @var string
     */
    public $statusName;

    /**
     * @description The code of the anomalous event subtype.
     *
     * @example 020008
     *
     * @var string
     */
    public $subTypeCode;

    /**
     * @description The name of the anomalous event subtype.
     *
     * @example Anomalous volume of downloaded data
     *
     * @var string
     */
    public $subTypeName;

    /**
     * @description The code of the anomalous event type.
     *
     * @example 02
     *
     * @var string
     */
    public $typeCode;

    /**
     * @description The name of the anomalous event type. Valid values:
     *
     *   **01**: anomalous permission usage
     *   **02**: anomalous data flow
     *   **03**: anomalous data operation
     *
     * @example Anomalous data flow
     *
     * @var string
     */
    public $typeName;

    /**
     * @description The ID of the account that triggered the anomalous event.
     *
     * @example 229157443385014***
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'alertTime'       => 'AlertTime',
        'backed'          => 'Backed',
        'dataInstance'    => 'DataInstance',
        'dealDisplayName' => 'DealDisplayName',
        'dealLoginName'   => 'DealLoginName',
        'dealReason'      => 'DealReason',
        'dealTime'        => 'DealTime',
        'dealUserId'      => 'DealUserId',
        'detail'          => 'Detail',
        'displayName'     => 'DisplayName',
        'eventTime'       => 'EventTime',
        'handleInfoList'  => 'HandleInfoList',
        'id'              => 'Id',
        'logDetail'       => 'LogDetail',
        'loginName'       => 'LoginName',
        'newAlarm'        => 'NewAlarm',
        'productCode'     => 'ProductCode',
        'status'          => 'Status',
        'statusName'      => 'StatusName',
        'subTypeCode'     => 'SubTypeCode',
        'subTypeName'     => 'SubTypeName',
        'typeCode'        => 'TypeCode',
        'typeName'        => 'TypeName',
        'userId'          => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertTime) {
            $res['AlertTime'] = $this->alertTime;
        }
        if (null !== $this->backed) {
            $res['Backed'] = $this->backed;
        }
        if (null !== $this->dataInstance) {
            $res['DataInstance'] = $this->dataInstance;
        }
        if (null !== $this->dealDisplayName) {
            $res['DealDisplayName'] = $this->dealDisplayName;
        }
        if (null !== $this->dealLoginName) {
            $res['DealLoginName'] = $this->dealLoginName;
        }
        if (null !== $this->dealReason) {
            $res['DealReason'] = $this->dealReason;
        }
        if (null !== $this->dealTime) {
            $res['DealTime'] = $this->dealTime;
        }
        if (null !== $this->dealUserId) {
            $res['DealUserId'] = $this->dealUserId;
        }
        if (null !== $this->detail) {
            $res['Detail'] = null !== $this->detail ? $this->detail->toMap() : null;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->handleInfoList) {
            $res['HandleInfoList'] = [];
            if (null !== $this->handleInfoList && \is_array($this->handleInfoList)) {
                $n = 0;
                foreach ($this->handleInfoList as $item) {
                    $res['HandleInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->logDetail) {
            $res['LogDetail'] = $this->logDetail;
        }
        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }
        if (null !== $this->newAlarm) {
            $res['NewAlarm'] = $this->newAlarm;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusName) {
            $res['StatusName'] = $this->statusName;
        }
        if (null !== $this->subTypeCode) {
            $res['SubTypeCode'] = $this->subTypeCode;
        }
        if (null !== $this->subTypeName) {
            $res['SubTypeName'] = $this->subTypeName;
        }
        if (null !== $this->typeCode) {
            $res['TypeCode'] = $this->typeCode;
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return event
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertTime'])) {
            $model->alertTime = $map['AlertTime'];
        }
        if (isset($map['Backed'])) {
            $model->backed = $map['Backed'];
        }
        if (isset($map['DataInstance'])) {
            $model->dataInstance = $map['DataInstance'];
        }
        if (isset($map['DealDisplayName'])) {
            $model->dealDisplayName = $map['DealDisplayName'];
        }
        if (isset($map['DealLoginName'])) {
            $model->dealLoginName = $map['DealLoginName'];
        }
        if (isset($map['DealReason'])) {
            $model->dealReason = $map['DealReason'];
        }
        if (isset($map['DealTime'])) {
            $model->dealTime = $map['DealTime'];
        }
        if (isset($map['DealUserId'])) {
            $model->dealUserId = $map['DealUserId'];
        }
        if (isset($map['Detail'])) {
            $model->detail = detail::fromMap($map['Detail']);
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['HandleInfoList'])) {
            if (!empty($map['HandleInfoList'])) {
                $model->handleInfoList = [];
                $n                     = 0;
                foreach ($map['HandleInfoList'] as $item) {
                    $model->handleInfoList[$n++] = null !== $item ? handleInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LogDetail'])) {
            $model->logDetail = $map['LogDetail'];
        }
        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }
        if (isset($map['NewAlarm'])) {
            $model->newAlarm = $map['NewAlarm'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusName'])) {
            $model->statusName = $map['StatusName'];
        }
        if (isset($map['SubTypeCode'])) {
            $model->subTypeCode = $map['SubTypeCode'];
        }
        if (isset($map['SubTypeName'])) {
            $model->subTypeName = $map['SubTypeName'];
        }
        if (isset($map['TypeCode'])) {
            $model->typeCode = $map['TypeCode'];
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
