<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateDiagnosticTaskRequest\aiJobLogInfo\aiJobLogs;

use AlibabaCloud\Dara\Model;

class logs extends Model
{
    /**
     * @var string
     */
    public $datetime;
    /**
     * @var string
     */
    public $logContent;
    protected $_name = [
        'datetime'   => 'Datetime',
        'logContent' => 'LogContent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datetime) {
            $res['Datetime'] = $this->datetime;
        }

        if (null !== $this->logContent) {
            $res['LogContent'] = $this->logContent;
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
        if (isset($map['Datetime'])) {
            $model->datetime = $map['Datetime'];
        }

        if (isset($map['LogContent'])) {
            $model->logContent = $map['LogContent'];
        }

        return $model;
    }
}
