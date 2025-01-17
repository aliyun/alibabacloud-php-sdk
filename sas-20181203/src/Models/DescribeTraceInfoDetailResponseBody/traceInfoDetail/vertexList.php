<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTraceInfoDetailResponseBody\traceInfoDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTraceInfoDetailResponseBody\traceInfoDetail\vertexList\neighborList;

class vertexList extends Model
{
    /**
     * @var int
     */
    public $count;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var neighborList[]
     */
    public $neighborList;
    /**
     * @var string
     */
    public $time;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'count'        => 'Count',
        'id'           => 'Id',
        'name'         => 'Name',
        'neighborList' => 'NeighborList',
        'time'         => 'Time',
        'type'         => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->neighborList)) {
            Model::validateArray($this->neighborList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->neighborList) {
            if (\is_array($this->neighborList)) {
                $res['NeighborList'] = [];
                $n1                  = 0;
                foreach ($this->neighborList as $item1) {
                    $res['NeighborList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NeighborList'])) {
            if (!empty($map['NeighborList'])) {
                $model->neighborList = [];
                $n1                  = 0;
                foreach ($map['NeighborList'] as $item1) {
                    $model->neighborList[$n1++] = neighborList::fromMap($item1);
                }
            }
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
