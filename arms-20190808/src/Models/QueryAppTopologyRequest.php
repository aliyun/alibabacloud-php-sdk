<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class QueryAppTopologyRequest extends Model
{
    /**
     * @description The application type
     *
     * @example TRACE
     *
     * @var string
     */
    public $appType;

    /**
     * @description The database domain name.
     *
     * @example rm-xxx.mysql.rds.aliyuncs.com:3306
     *
     * @var string
     */
    public $db;

    /**
     * @description The name of the database.
     *
     * @example orders
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The end of the time range to query. Unit: milliseconds.
     *
     * This parameter is required.
     * @example 1671952708499
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The filter conditions.
     *
     * @var string[]
     */
    public $filters;

    /**
     * @description The ID of the application.
     *
     * Log on to the **ARMS console**. In the left-side navigation pane, choose **Browser Monitoring** > **Browser Monitoring**. On the Browser Monitoring page, click the name of an application. The URL in the address bar contains the process ID (PID) of the application. The PID is indicated in the pid=xxx format. The PID is usually percent encoded as xxx%40xxx. You must modify this value to remove the percent encoding. For example, if the PID in the URL is eb4zdose6v%409781be0f44d\\*\\*\\*\\*, you must replace %40 with an at sign (@) to obtain eb4zdose6v@9781be0f44d\\*\\*\\*\\*.
     * @example atc889zkcf@d8deedfa9bf****
     *
     * @var string
     */
    public $pid;

    /**
     * @description The ID of the region.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description RPC interface name.
     *
     * @example /eventCenter
     *
     * @var string
     */
    public $rpc;

    /**
     * @description The start of the time range to query. Unit: milliseconds.
     *
     * This parameter is required.
     * @example 1595568910000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The type kind of topology.
     *
     * This parameter is required.
     * @example apm_apps_v2
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'appType'   => 'AppType',
        'db'        => 'Db',
        'dbName'    => 'DbName',
        'endTime'   => 'EndTime',
        'filters'   => 'Filters',
        'pid'       => 'Pid',
        'regionId'  => 'RegionId',
        'rpc'       => 'Rpc',
        'startTime' => 'StartTime',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->filters) {
            $res['Filters'] = $this->filters;
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

    /**
     * @param array $map
     *
     * @return QueryAppTopologyRequest
     */
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
            $model->filters = $map['Filters'];
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
