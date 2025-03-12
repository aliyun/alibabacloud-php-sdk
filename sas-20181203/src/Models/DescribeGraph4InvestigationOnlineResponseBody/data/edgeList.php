<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGraph4InvestigationOnlineResponseBody\data;

use AlibabaCloud\Tea\Model;

class edgeList extends Model
{
    /**
     * @description ID of the end point of the edge.
     *
     * @example f944c2362c7e111dee16f0e70ad2xxxx
     *
     * @var string
     */
    public $endId;

    /**
     * @description The type of the end point of the current edge. Possible values include but are not limited to:
     * - **process**: Process
     * - **file**: File
     * - **alert**: Alert
     * - **ip**: IP address
     * - **domain**: Domain
     * @example process
     *
     * @var string
     */
    public $endType;

    /**
     * @description Edge name.
     *
     * @example bash->apt-get
     *
     * @var string
     */
    public $name;

    /**
     * @description Start vertex id of edge.
     *
     * @example f944c2362c7e111dee16f0e70ad2xxxx
     *
     * @var string
     */
    public $startId;

    /**
     * @description The type of the starting point of the edge. Possible values include, but are not limited to:
     * - **process**： Process
     * - **file**： File
     * - **alert**： Alert
     * - **ip**： IP address
     * - **domain**： Domain
     * @example file
     *
     * @var string
     */
    public $startType;

    /**
     * @description The time when the edge was established.
     *
     * @example 2024-07-01 15:25:46
     *
     * @var string
     */
    public $time;

    /**
     * @description The type of the edge.
     *
     * @example process_spawn_process
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return edgeList
     */
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
