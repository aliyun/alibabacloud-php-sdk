<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGraph4InvestigationOnlineResponseBody\data;

use AlibabaCloud\Dara\Model;

class edgeList extends Model
{
    /**
     * @var string
     */
    public $endId;
    /**
     * @var string
     */
    public $endType;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $startId;
    /**
     * @var string
     */
    public $startType;
    /**
     * @var string
     */
    public $time;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'endId'     => 'EndId',
        'endType'   => 'EndType',
        'name'      => 'Name',
        'startId'   => 'StartId',
        'startType' => 'StartType',
        'time'      => 'Time',
        'type'      => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endId) {
            $res['EndId'] = $this->endId;
        }

        if (null !== $this->endType) {
            $res['EndType'] = $this->endType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->startId) {
            $res['StartId'] = $this->startId;
        }

        if (null !== $this->startType) {
            $res['StartType'] = $this->startType;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['EndId'])) {
            $model->endId = $map['EndId'];
        }

        if (isset($map['EndType'])) {
            $model->endType = $map['EndType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['StartId'])) {
            $model->startId = $map['StartId'];
        }

        if (isset($map['StartType'])) {
            $model->startType = $map['StartType'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
