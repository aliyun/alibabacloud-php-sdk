<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class QueryDeleteTaskCheckDataRequest extends Model
{
    /**
     * @var string
     */
    public $agAccountType;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $longLang;

    /**
     * @var string
     */
    public $mpk;

    /**
     * @var string
     */
    public $pk;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'agAccountType' => 'AgAccountType',
        'appName' => 'AppName',
        'longLang' => 'LongLang',
        'mpk' => 'Mpk',
        'pk' => 'Pk',
        'taskId' => 'TaskId',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agAccountType) {
            $res['AgAccountType'] = $this->agAccountType;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->longLang) {
            $res['LongLang'] = $this->longLang;
        }

        if (null !== $this->mpk) {
            $res['Mpk'] = $this->mpk;
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
        if (isset($map['AgAccountType'])) {
            $model->agAccountType = $map['AgAccountType'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['LongLang'])) {
            $model->longLang = $map['LongLang'];
        }

        if (isset($map['Mpk'])) {
            $model->mpk = $map['Mpk'];
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
