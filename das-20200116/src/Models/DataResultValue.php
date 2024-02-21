<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class DataResultValue extends Model
{
    /**
     * @description The SQL ID.
     *
     * @example ad78a4e7d3ce81590c9dc2d5f4bc****
     *
     * @var string
     */
    public $sqlId;

    /**
     * @description The instance ID.
     *
     * @example rm-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of failed executions.
     *
     * @example 1
     *
     * @var int
     */
    public $count;
    protected $_name = [
        'sqlId'      => 'sqlId',
        'instanceId' => 'instanceId',
        'count'      => 'count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sqlId) {
            $res['sqlId'] = $this->sqlId;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataResultValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['sqlId'])) {
            $model->sqlId = $map['sqlId'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        return $model;
    }
}
