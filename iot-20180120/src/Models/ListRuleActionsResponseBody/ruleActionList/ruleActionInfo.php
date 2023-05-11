<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListRuleActionsResponseBody\ruleActionList;

use AlibabaCloud\Tea\Model;

class ruleActionInfo extends Model
{
    /**
     * @description The configurations of the data destination.
     *
     * @example {\"endPoint\":\"http://ShanghaiRegion.cn-shanghai.ots.aliyuncs.com\",\"instanceName\":\"ShanghaiRegion\",\"primaryKeys\":[{\"columnName\":\"temperature\",\"columnType\":\"INTEGER\",\"columnValue\":\"${deviceName}\"}],\"regionName\":\"cn-shanghai\",\"role\":{\"roleArn\":\"acs:ram::1231579085******:role/aliyuniotaccessingotsrole\",\"roleName\":\"AliyunIOTAccessingOTSRole\"},\"tableName\":\"iottest\",\"uid\":\"1231579085******\"}
     *
     * @var string
     */
    public $configuration;

    /**
     * @description Indicates whether the data destination is used to receive the error operation data. The error operation data is data that failed to be forwarded two consecutive times.
     *
     *   **true**: This destination is used to receive error operation data.
     *   **false**: This destination is not used to receive error operation data.
     *
     * @example false
     *
     * @var bool
     */
    public $errorActionFlag;

    /**
     * @description The ID of the action in which data is forwarded to the destination.
     *
     * @example 139099
     *
     * @var int
     */
    public $id;

    /**
     * @description The ID of the rule based on which data is forwarded to the destination.
     *
     * @example 10000
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The status of the data forwarding action. Valid values:
     *
     *   **INIT**: The action is being configured.
     *   **NORMAL**: The configuration is complete, and the action can run properly.
     *   **INVALID**: The configuration data is invalid, and the action fails to run.
     *   **SHORTCUT**: An exception occurs and the data forwarding action is stopped.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the action in which data is forwarded to a destination. Valid values:
     *
     *   **REPUBLISH**: Data is forwarded to a topic.
     *   **OTS**: Data is stored in Tablestore.
     *   **MNS**: Data is forwarded to Message Service (MNS).
     *   **ONS**: Data is forwarded to Message Queue for Apache RocketMQ.
     *   **TSDB**: Data is stored in Time Series Database.
     *   **FC**: Data is forwarded to Function Compute.
     *   **RDS**: Data is forwarded to ApsaraDB RDS.
     *   **AMQP**: Data is forwarded to an Advanced Message Queuing Protocol (AMQP) consumer group.
     *
     * @example OTS
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'configuration'   => 'Configuration',
        'errorActionFlag' => 'ErrorActionFlag',
        'id'              => 'Id',
        'ruleId'          => 'RuleId',
        'status'          => 'Status',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configuration) {
            $res['Configuration'] = $this->configuration;
        }
        if (null !== $this->errorActionFlag) {
            $res['ErrorActionFlag'] = $this->errorActionFlag;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleActionInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Configuration'])) {
            $model->configuration = $map['Configuration'];
        }
        if (isset($map['ErrorActionFlag'])) {
            $model->errorActionFlag = $map['ErrorActionFlag'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
