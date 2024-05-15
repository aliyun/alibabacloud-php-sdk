<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetSqlConcurrencyControlKeywordsFromSqlTextRequest extends Model
{
    /**
     * @description The reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $consoleContext;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example rm-2ze5hpn2b99d2****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The SQL statement based on which a throttling keyword string is to be generated.
     *
     * This parameter is required.
     * @example SELECT * FROM test where name = \\"das\\"
     *
     * @var string
     */
    public $sqlText;
    protected $_name = [
        'consoleContext' => 'ConsoleContext',
        'instanceId'     => 'InstanceId',
        'sqlText'        => 'SqlText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consoleContext) {
            $res['ConsoleContext'] = $this->consoleContext;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->sqlText) {
            $res['SqlText'] = $this->sqlText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSqlConcurrencyControlKeywordsFromSqlTextRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsoleContext'])) {
            $model->consoleContext = $map['ConsoleContext'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SqlText'])) {
            $model->sqlText = $map['SqlText'];
        }

        return $model;
    }
}
