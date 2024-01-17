<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class ExecuteBatchTaskRequest extends Model
{
    /**
     * @example APP_PBKTxxx
     *
     * @var string
     */
    public $appType;

    /**
     * @example disagree
     *
     * @var string
     */
    public $outResult;

    /**
     * @example remark
     *
     * @var string
     */
    public $remark;

    /**
     * @example hexxxx
     *
     * @var string
     */
    public $systemToken;

    /**
     * @example [{"taskId":"2291xxx","formInstId":"d84a79xxx"}, {"taskId":"2291xxx","formInstId":"f8035e2axxx"}]
     *
     * @var string
     */
    public $taskInformationList;
    protected $_name = [
        'appType'             => 'AppType',
        'outResult'           => 'OutResult',
        'remark'              => 'Remark',
        'systemToken'         => 'SystemToken',
        'taskInformationList' => 'TaskInformationList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->outResult) {
            $res['OutResult'] = $this->outResult;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
        }
        if (null !== $this->taskInformationList) {
            $res['TaskInformationList'] = $this->taskInformationList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteBatchTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['OutResult'])) {
            $model->outResult = $map['OutResult'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }
        if (isset($map['TaskInformationList'])) {
            $model->taskInformationList = $map['TaskInformationList'];
        }

        return $model;
    }
}
