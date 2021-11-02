<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGraph4InvestigationOnlineResponseBody\data;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGraph4InvestigationOnlineResponseBody\data\vertexList\neighborList;
use AlibabaCloud\Tea\Model;

class vertexList extends Model
{
    /**
     * @var string
     */
    public $aliuid;

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
    public $position;

    /**
     * @var string
     */
    public $positionId;

    /**
     * @var string
     */
    public $properties;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'aliuid'       => 'Aliuid',
        'id'           => 'Id',
        'name'         => 'Name',
        'neighborList' => 'NeighborList',
        'position'     => 'Position',
        'positionId'   => 'PositionId',
        'properties'   => 'Properties',
        'time'         => 'Time',
        'type'         => 'Type',
        'uuid'         => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliuid) {
            $res['Aliuid'] = $this->aliuid;
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
        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }
        if (null !== $this->positionId) {
            $res['PositionId'] = $this->positionId;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['Aliuid'])) {
            $model->aliuid = $map['Aliuid'];
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
        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }
        if (isset($map['PositionId'])) {
            $model->positionId = $map['PositionId'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
