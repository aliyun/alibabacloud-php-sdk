<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateDiagnosticTaskRequest\aiJobLogInfo\aiJobLogs;

use AlibabaCloud\Tea\Model;

class logs extends Model
{
    /**
     * @description Sent date, in the format yyyymmdd.
     *
     * @example 2024-08-05T10:10:01
     *
     * @var string
     */
    public $datetime;

    /**
     * @description Log content
     *
     * @example success
     *
     * @var string
     */
    public $logContent;
    protected $_name = [
        'datetime' => 'Datetime',
        'logContent' => 'LogContent',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return logs
     */
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
