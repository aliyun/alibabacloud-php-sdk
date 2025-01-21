<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class QueryAppTopologyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appType;
    /**
     * @var string
     */
    public $db;
    /**
     * @var string
     */
    public $dbName;
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var string
     */
    public $filtersShrink;
    /**
     * @var string
     */
    public $pid;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $rpc;
    /**
     * @var int
     */
    public $startTime;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'appType'       => 'AppType',
        'db'            => 'Db',
        'dbName'        => 'DbName',
        'endTime'       => 'EndTime',
        'filtersShrink' => 'Filters',
        'pid'           => 'Pid',
        'regionId'      => 'RegionId',
        'rpc'           => 'Rpc',
        'startTime'     => 'StartTime',
        'type'          => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->db) {
            $res['Db'] = $this->db;
        }

        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->filtersShrink) {
            $res['Filters'] = $this->filtersShrink;
        }

        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->rpc) {
            $res['Rpc'] = $this->rpc;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['Db'])) {
            $model->db = $map['Db'];
        }

        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Filters'])) {
            $model->filtersShrink = $map['Filters'];
        }

        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Rpc'])) {
            $model->rpc = $map['Rpc'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
