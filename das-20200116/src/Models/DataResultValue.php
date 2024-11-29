<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class DataResultValue extends Model
{
    /**
     * @var string
     */
    public $sqlId;

    /**
     * @var string
     */
    public $instanceId;

    /**
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
