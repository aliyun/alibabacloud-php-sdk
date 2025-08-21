<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Dara\Model;

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
        'sqlId' => 'sqlId',
        'instanceId' => 'instanceId',
        'count' => 'count',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
