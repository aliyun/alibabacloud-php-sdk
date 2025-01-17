<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSoarStrategyTaskDetailResponseBody;

use AlibabaCloud\Dara\Model;

class taskDetail extends Model
{
    /**
     * @var string
     */
    public $logInfo;
    /**
     * @var string
     */
    public $params;
    /**
     * @var string
     */
    public $processInfo;
    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'logInfo'     => 'LogInfo',
        'params'      => 'Params',
        'processInfo' => 'ProcessInfo',
        'taskName'    => 'TaskName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logInfo) {
            $res['LogInfo'] = $this->logInfo;
        }

        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }

        if (null !== $this->processInfo) {
            $res['ProcessInfo'] = $this->processInfo;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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
        if (isset($map['LogInfo'])) {
            $model->logInfo = $map['LogInfo'];
        }

        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        if (isset($map['ProcessInfo'])) {
            $model->processInfo = $map['ProcessInfo'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
