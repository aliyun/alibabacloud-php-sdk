<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class ExecuteBatchTaskRequest extends Model
{
    /**
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $outResult;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $systemToken;

    /**
     * @var string
     */
    public $taskInformationList;
    protected $_name = [
        'appType' => 'AppType',
        'outResult' => 'OutResult',
        'remark' => 'Remark',
        'systemToken' => 'SystemToken',
        'taskInformationList' => 'TaskInformationList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
