<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDBTopologyResponseBody\DBTopology;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDBTopologyResponseBody\DBTopology\dataSourceList\databaseList;
use AlibabaCloud\Tea\Model;

class dataSourceList extends Model
{
    /**
     * @description The physical databases.
     *
     * @var databaseList[]
     */
    public $databaseList;

    /**
     * @description The type of the database. For more information about the valid values of this parameter, see [DbType parameter](~~198106~~).
     *
     * @example MySQL
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The endpoint of the data source.
     *
     * @example xxx.mysql.polardb.rds.aliyuncs.com
     *
     * @var string
     */
    public $host;

    /**
     * @description The port that is used to connect to the data source.
     *
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @description The system ID (SID) of the data source.
     *
     * @example def
     *
     * @var string
     */
    public $sid;
    protected $_name = [
        'databaseList' => 'DatabaseList',
        'dbType'       => 'DbType',
        'host'         => 'Host',
        'port'         => 'Port',
        'sid'          => 'Sid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseList) {
            $res['DatabaseList'] = [];
            if (null !== $this->databaseList && \is_array($this->databaseList)) {
                $n = 0;
                foreach ($this->databaseList as $item) {
                    $res['DatabaseList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSourceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseList'])) {
            if (!empty($map['DatabaseList'])) {
                $model->databaseList = [];
                $n                   = 0;
                foreach ($map['DatabaseList'] as $item) {
                    $model->databaseList[$n++] = null !== $item ? databaseList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }

        return $model;
    }
}
