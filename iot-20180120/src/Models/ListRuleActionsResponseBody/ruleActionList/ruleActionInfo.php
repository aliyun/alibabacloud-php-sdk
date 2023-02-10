<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListRuleActionsResponseBody\ruleActionList;

use AlibabaCloud\Tea\Model;

class ruleActionInfo extends Model
{
    /**
     * @example {\"endPoint\":\"http://ShanghaiRegion.cn-shanghai.ots.aliyuncs.com\",\"instanceName\":\"ShanghaiRegion\",\"primaryKeys\":[{\"columnName\":\"temperature\",\"columnType\":\"INTEGER\",\"columnValue\":\"${deviceName}\"}],\"regionName\":\"cn-shanghai\",\"role\":{\"roleArn\":\"acs:ram::1231579085******:role/aliyuniotaccessingotsrole\",\"roleName\":\"AliyunIOTAccessingOTSRole\"},\"tableName\":\"iottest\",\"uid\":\"1231579085******\"}
     *
     * @var string
     */
    public $configuration;

    /**
     * @example false
     *
     * @var bool
     */
    public $errorActionFlag;

    /**
     * @example 139099
     *
     * @var int
     */
    public $id;

    /**
     * @example 10000
     *
     * @var int
     */
    public $ruleId;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $status;

    /**
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
