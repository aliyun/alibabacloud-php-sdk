<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class DisableSqlConcurrencyControlRequest extends Model
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
     * >  The database instance must be an ApsaraDB RDS for MySQL instance or a PolarDB for MySQL cluster.
     * @example rm-2ze1jdv45i7l6****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the throttling rule that is applied to the instance. You can call the [GetRunningSqlConcurrencyControlRules](~~223538~~) operation to query the ID.
     *
     * @example 1
     *
     * @var int
     */
    public $itemId;
    protected $_name = [
        'consoleContext' => 'ConsoleContext',
        'instanceId'     => 'InstanceId',
        'itemId'         => 'ItemId',
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
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisableSqlConcurrencyControlRequest
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
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }

        return $model;
    }
}
