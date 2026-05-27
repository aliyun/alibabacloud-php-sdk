<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsTimersResponseBody\data;

use AlibabaCloud\Dara\Model;

class objectList extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $scheduleType;

    /**
     * @var int
     */
    public $sourceId;

    /**
     * @var string
     */
    public $srcDbName;

    /**
     * @var bool
     */
    public $stopped;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'createTime' => 'createTime',
        'dbId' => 'dbId',
        'id' => 'id',
        'name' => 'name',
        'scheduleType' => 'scheduleType',
        'sourceId' => 'sourceId',
        'srcDbName' => 'srcDbName',
        'stopped' => 'stopped',
        'type' => 'type',
        'value' => 'value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->dbId) {
            $res['dbId'] = $this->dbId;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->scheduleType) {
            $res['scheduleType'] = $this->scheduleType;
        }

        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }

        if (null !== $this->srcDbName) {
            $res['srcDbName'] = $this->srcDbName;
        }

        if (null !== $this->stopped) {
            $res['stopped'] = $this->stopped;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['dbId'])) {
            $model->dbId = $map['dbId'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['scheduleType'])) {
            $model->scheduleType = $map['scheduleType'];
        }

        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }

        if (isset($map['srcDbName'])) {
            $model->srcDbName = $map['srcDbName'];
        }

        if (isset($map['stopped'])) {
            $model->stopped = $map['stopped'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
