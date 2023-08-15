<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\QueryHBaseHaDBResponseBody\clusterList;

use AlibabaCloud\SDK\HBase\V20190101\Models\QueryHBaseHaDBResponseBody\clusterList\cluster\haSlbConnList;
use AlibabaCloud\Tea\Model;

class cluster extends Model
{
    /**
     * @example hb-t4nn7dy1u1etbzmzm
     *
     * @var string
     */
    public $activeName;

    /**
     * @description bdsId
     *
     * @example bds-t4n3496whj23ia4k
     *
     * @var string
     */
    public $bdsName;

    /**
     * @example ha-v21tmnxjwh2yuy1il
     *
     * @var string
     */
    public $haName;

    /**
     * @var haSlbConnList
     */
    public $haSlbConnList;

    /**
     * @example hb-t4n0ye37832tx22vz
     *
     * @var string
     */
    public $standbyName;
    protected $_name = [
        'activeName'    => 'ActiveName',
        'bdsName'       => 'BdsName',
        'haName'        => 'HaName',
        'haSlbConnList' => 'HaSlbConnList',
        'standbyName'   => 'StandbyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeName) {
            $res['ActiveName'] = $this->activeName;
        }
        if (null !== $this->bdsName) {
            $res['BdsName'] = $this->bdsName;
        }
        if (null !== $this->haName) {
            $res['HaName'] = $this->haName;
        }
        if (null !== $this->haSlbConnList) {
            $res['HaSlbConnList'] = null !== $this->haSlbConnList ? $this->haSlbConnList->toMap() : null;
        }
        if (null !== $this->standbyName) {
            $res['StandbyName'] = $this->standbyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveName'])) {
            $model->activeName = $map['ActiveName'];
        }
        if (isset($map['BdsName'])) {
            $model->bdsName = $map['BdsName'];
        }
        if (isset($map['HaName'])) {
            $model->haName = $map['HaName'];
        }
        if (isset($map['HaSlbConnList'])) {
            $model->haSlbConnList = haSlbConnList::fromMap($map['HaSlbConnList']);
        }
        if (isset($map['StandbyName'])) {
            $model->standbyName = $map['StandbyName'];
        }

        return $model;
    }
}
