<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\QueryHBaseHaDBResponseBody\clusterList;

use AlibabaCloud\SDK\HBase\V20190101\Models\QueryHBaseHaDBResponseBody\clusterList\cluster\haSlbConnList;
use AlibabaCloud\Tea\Model;

class cluster extends Model
{
    /**
     * @var string
     */
    public $haName;

    /**
     * @var string
     */
    public $bdsName;

    /**
     * @var haSlbConnList
     */
    public $haSlbConnList;

    /**
     * @var string
     */
    public $activeName;

    /**
     * @var string
     */
    public $standbyName;
    protected $_name = [
        'haName'        => 'HaName',
        'bdsName'       => 'BdsName',
        'haSlbConnList' => 'HaSlbConnList',
        'activeName'    => 'ActiveName',
        'standbyName'   => 'StandbyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->haName) {
            $res['HaName'] = $this->haName;
        }
        if (null !== $this->bdsName) {
            $res['BdsName'] = $this->bdsName;
        }
        if (null !== $this->haSlbConnList) {
            $res['HaSlbConnList'] = null !== $this->haSlbConnList ? $this->haSlbConnList->toMap() : null;
        }
        if (null !== $this->activeName) {
            $res['ActiveName'] = $this->activeName;
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
        if (isset($map['HaName'])) {
            $model->haName = $map['HaName'];
        }
        if (isset($map['BdsName'])) {
            $model->bdsName = $map['BdsName'];
        }
        if (isset($map['HaSlbConnList'])) {
            $model->haSlbConnList = haSlbConnList::fromMap($map['HaSlbConnList']);
        }
        if (isset($map['ActiveName'])) {
            $model->activeName = $map['ActiveName'];
        }
        if (isset($map['StandbyName'])) {
            $model->standbyName = $map['StandbyName'];
        }

        return $model;
    }
}
