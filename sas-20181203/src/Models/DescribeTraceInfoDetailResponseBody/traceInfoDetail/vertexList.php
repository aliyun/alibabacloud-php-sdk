<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTraceInfoDetailResponseBody\traceInfoDetail;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTraceInfoDetailResponseBody\traceInfoDetail\vertexList\neighborList;
use AlibabaCloud\Tea\Model;

class vertexList extends Model
{
    /**
     * @description The number of times.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The ID of the vertex.
     *
     * @example a1d1fa39e5345dcef3f9712172xxxxxx
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the entity represented by the vertex.
     *
     * @example /usr/local/tomcat
     *
     * @var string
     */
    public $name;

    /**
     * @description An array that consists of the neighbor nodes.
     *
     * @var neighborList[]
     */
    public $neighborList;

    /**
     * @description The point in time.
     *
     * @example 2022-12-21 10:24:42
     *
     * @var string
     */
    public $time;

    /**
     * @description The type of the entity represented by the vertex.
     *
     * @example file_path
     *
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
    }

    public function toMap()
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
            $res['NeighborList'] = [];
            if (null !== $this->neighborList && \is_array($this->neighborList)) {
                $n = 0;
                foreach ($this->neighborList as $item) {
                    $res['NeighborList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return vertexList
     */
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
                $n                   = 0;
                foreach ($map['NeighborList'] as $item) {
                    $model->neighborList[$n++] = null !== $item ? neighborList::fromMap($item) : $item;
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
