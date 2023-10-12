<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetMonitorItemResponseBody;

use AlibabaCloud\SDK\Cmn\V20200825\Models\GetMonitorItemResponseBody\monitorItem\alarmRuleList;
use AlibabaCloud\SDK\Cmn\V20200825\Models\GetMonitorItemResponseBody\monitorItem\personalizedAlarmRuleList;
use AlibabaCloud\Tea\Model;

class monitorItem extends Model
{
    /**
     * @var alarmRuleList[]
     */
    public $alarmRuleList;

    /**
     * @example /**\n** Parsing logic\n** @param: output :Collect raw data\n**\/\nfunction parse(output){\n    var results = {}
     *
     * @var string
     */
    public $analysisCode;

    /**
     * @example PING
     *
     * @var string
     */
    public $collectionType;

    /**
     * @example {\"Interval\":1000,\"PackNum\":30}
     *
     * @var string
     */
    public $config;

    /**
     * @example 2023-06-22 02:37:19
     *
     * @var string
     */
    public $createTime;

    /**
     * @example avg_latency
     *
     * @var string
     */
    public $dataItem;

    /**
     * @var string
     */
    public $deviceForm;

    /**
     * @example 1
     *
     * @var int
     */
    public $effective;

    /**
     * @example 60
     *
     * @var int
     */
    public $execInterval;

    /**
     * @var string
     */
    public $monitorItemDescription;

    /**
     * @example m-598zb0r9z3f44cfr
     *
     * @var string
     */
    public $monitorItemId;

    /**
     * @var string
     */
    public $monitorItemName;

    /**
     * @var personalizedAlarmRuleList[]
     */
    public $personalizedAlarmRuleList;

    /**
     * @example *
     *
     * @var string
     */
    public $securityDomain;

    /**
     * @example SINGLE
     *
     * @var string
     */
    public $type;

    /**
     * @example 2023-06-22 02:37:19
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'alarmRuleList'             => 'AlarmRuleList',
        'analysisCode'              => 'AnalysisCode',
        'collectionType'            => 'CollectionType',
        'config'                    => 'Config',
        'createTime'                => 'CreateTime',
        'dataItem'                  => 'DataItem',
        'deviceForm'                => 'DeviceForm',
        'effective'                 => 'Effective',
        'execInterval'              => 'ExecInterval',
        'monitorItemDescription'    => 'MonitorItemDescription',
        'monitorItemId'             => 'MonitorItemId',
        'monitorItemName'           => 'MonitorItemName',
        'personalizedAlarmRuleList' => 'PersonalizedAlarmRuleList',
        'securityDomain'            => 'SecurityDomain',
        'type'                      => 'Type',
        'updateTime'                => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmRuleList) {
            $res['AlarmRuleList'] = [];
            if (null !== $this->alarmRuleList && \is_array($this->alarmRuleList)) {
                $n = 0;
                foreach ($this->alarmRuleList as $item) {
                    $res['AlarmRuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->analysisCode) {
            $res['AnalysisCode'] = $this->analysisCode;
        }
        if (null !== $this->collectionType) {
            $res['CollectionType'] = $this->collectionType;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataItem) {
            $res['DataItem'] = $this->dataItem;
        }
        if (null !== $this->deviceForm) {
            $res['DeviceForm'] = $this->deviceForm;
        }
        if (null !== $this->effective) {
            $res['Effective'] = $this->effective;
        }
        if (null !== $this->execInterval) {
            $res['ExecInterval'] = $this->execInterval;
        }
        if (null !== $this->monitorItemDescription) {
            $res['MonitorItemDescription'] = $this->monitorItemDescription;
        }
        if (null !== $this->monitorItemId) {
            $res['MonitorItemId'] = $this->monitorItemId;
        }
        if (null !== $this->monitorItemName) {
            $res['MonitorItemName'] = $this->monitorItemName;
        }
        if (null !== $this->personalizedAlarmRuleList) {
            $res['PersonalizedAlarmRuleList'] = [];
            if (null !== $this->personalizedAlarmRuleList && \is_array($this->personalizedAlarmRuleList)) {
                $n = 0;
                foreach ($this->personalizedAlarmRuleList as $item) {
                    $res['PersonalizedAlarmRuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->securityDomain) {
            $res['SecurityDomain'] = $this->securityDomain;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmRuleList'])) {
            if (!empty($map['AlarmRuleList'])) {
                $model->alarmRuleList = [];
                $n                    = 0;
                foreach ($map['AlarmRuleList'] as $item) {
                    $model->alarmRuleList[$n++] = null !== $item ? alarmRuleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AnalysisCode'])) {
            $model->analysisCode = $map['AnalysisCode'];
        }
        if (isset($map['CollectionType'])) {
            $model->collectionType = $map['CollectionType'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataItem'])) {
            $model->dataItem = $map['DataItem'];
        }
        if (isset($map['DeviceForm'])) {
            $model->deviceForm = $map['DeviceForm'];
        }
        if (isset($map['Effective'])) {
            $model->effective = $map['Effective'];
        }
        if (isset($map['ExecInterval'])) {
            $model->execInterval = $map['ExecInterval'];
        }
        if (isset($map['MonitorItemDescription'])) {
            $model->monitorItemDescription = $map['MonitorItemDescription'];
        }
        if (isset($map['MonitorItemId'])) {
            $model->monitorItemId = $map['MonitorItemId'];
        }
        if (isset($map['MonitorItemName'])) {
            $model->monitorItemName = $map['MonitorItemName'];
        }
        if (isset($map['PersonalizedAlarmRuleList'])) {
            if (!empty($map['PersonalizedAlarmRuleList'])) {
                $model->personalizedAlarmRuleList = [];
                $n                                = 0;
                foreach ($map['PersonalizedAlarmRuleList'] as $item) {
                    $model->personalizedAlarmRuleList[$n++] = null !== $item ? personalizedAlarmRuleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SecurityDomain'])) {
            $model->securityDomain = $map['SecurityDomain'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
