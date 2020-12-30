<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDBTopologyResponseBody\DBTopology;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDBTopologyResponseBody\DBTopology\dataSourceList\databaseList;
use AlibabaCloud\Tea\Model;

class dataSourceList extends Model
{
    /**
     * @var string
     */
    public $sid;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var databaseList[]
     */
    public $databaseList;

    /**
     * @var int
     */
    public $port;
    protected $_name = [
        'sid'          => 'Sid',
        'host'         => 'Host',
        'dbType'       => 'DbType',
        'databaseList' => 'DatabaseList',
        'port'         => 'Port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->databaseList) {
            $res['DatabaseList'] = [];
            if (null !== $this->databaseList && \is_array($this->databaseList)) {
                $n = 0;
                foreach ($this->databaseList as $item) {
                    $res['DatabaseList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
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
        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['DatabaseList'])) {
            if (!empty($map['DatabaseList'])) {
                $model->databaseList = [];
                $n                   = 0;
                foreach ($map['DatabaseList'] as $item) {
                    $model->databaseList[$n++] = null !== $item ? databaseList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
