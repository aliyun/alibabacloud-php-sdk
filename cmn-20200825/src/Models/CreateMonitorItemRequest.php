<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateMonitorItemRequest\alarmRuleList;
use AlibabaCloud\Tea\Model;

class CreateMonitorItemRequest extends Model
{
    /**
     * @var alarmRuleList[]
     */
    public $alarmRuleList;

    /**
     * @example /**\n** Parsing logic\n** @param: output :Collect raw data\n\n1.3.6.1.4.1.12356.101.13.2.1.1.12\n**\/\n\n\nfunction parse(output){\n  \tvar results = {}
     *
     * @var string
     */
    public $analysisCode;

    /**
     * @example c6aaac41-8cfa-4952-bb1c-1ad9617ab23f
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example SNMP
     *
     * @var string
     */
    public $collectionType;

    /**
     * @example {\"Type\":\"snmpwalk\"}
     *
     * @var string
     */
    public $config;

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
     * @example cmn-cn-xxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $monitorItemDescription;

    /**
     * @var string
     */
    public $monitorItemName;

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
    protected $_name = [
        'alarmRuleList'          => 'AlarmRuleList',
        'analysisCode'           => 'AnalysisCode',
        'clientToken'            => 'ClientToken',
        'collectionType'         => 'CollectionType',
        'config'                 => 'Config',
        'dataItem'               => 'DataItem',
        'deviceForm'             => 'DeviceForm',
        'effective'              => 'Effective',
        'execInterval'           => 'ExecInterval',
        'instanceId'             => 'InstanceId',
        'monitorItemDescription' => 'MonitorItemDescription',
        'monitorItemName'        => 'MonitorItemName',
        'securityDomain'         => 'SecurityDomain',
        'type'                   => 'Type',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->collectionType) {
            $res['CollectionType'] = $this->collectionType;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->monitorItemDescription) {
            $res['MonitorItemDescription'] = $this->monitorItemDescription;
        }
        if (null !== $this->monitorItemName) {
            $res['MonitorItemName'] = $this->monitorItemName;
        }
        if (null !== $this->securityDomain) {
            $res['SecurityDomain'] = $this->securityDomain;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMonitorItemRequest
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CollectionType'])) {
            $model->collectionType = $map['CollectionType'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MonitorItemDescription'])) {
            $model->monitorItemDescription = $map['MonitorItemDescription'];
        }
        if (isset($map['MonitorItemName'])) {
            $model->monitorItemName = $map['MonitorItemName'];
        }
        if (isset($map['SecurityDomain'])) {
            $model->securityDomain = $map['SecurityDomain'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
