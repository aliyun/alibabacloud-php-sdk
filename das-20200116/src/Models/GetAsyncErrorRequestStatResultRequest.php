<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Dara\Model;

class GetAsyncErrorRequestStatResultRequest extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var int
     */
    public $end;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $sqlIdList;

    /**
     * @var int
     */
    public $start;
    protected $_name = [
        'dbName' => 'DbName',
        'end' => 'End',
        'instanceId' => 'InstanceId',
        'nodeId' => 'NodeId',
        'sqlIdList' => 'SqlIdList',
        'start' => 'Start',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->end) {
            $res['End'] = $this->end;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->sqlIdList) {
            $res['SqlIdList'] = $this->sqlIdList;
        }

        if (null !== $this->start) {
            $res['Start'] = $this->start;
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
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['End'])) {
            $model->end = $map['End'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['SqlIdList'])) {
            $model->sqlIdList = $map['SqlIdList'];
        }

        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
