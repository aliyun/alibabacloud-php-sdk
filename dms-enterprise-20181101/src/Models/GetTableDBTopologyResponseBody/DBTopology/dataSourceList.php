<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDBTopologyResponseBody\DBTopology;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTableDBTopologyResponseBody\DBTopology\dataSourceList\databaseList;

class dataSourceList extends Model
{
    /**
     * @var databaseList[]
     */
    public $databaseList;
    /**
     * @var string
     */
    public $dbType;
    /**
     * @var string
     */
    public $host;
    /**
     * @var int
     */
    public $port;
    /**
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
        if (\is_array($this->databaseList)) {
            Model::validateArray($this->databaseList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databaseList) {
            if (\is_array($this->databaseList)) {
                $res['DatabaseList'] = [];
                $n1                  = 0;
                foreach ($this->databaseList as $item1) {
                    $res['DatabaseList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseList'])) {
            if (!empty($map['DatabaseList'])) {
                $model->databaseList = [];
                $n1                  = 0;
                foreach ($map['DatabaseList'] as $item1) {
                    $model->databaseList[$n1++] = databaseList::fromMap($item1);
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
