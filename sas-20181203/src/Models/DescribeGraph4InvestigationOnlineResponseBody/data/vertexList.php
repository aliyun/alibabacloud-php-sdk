<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGraph4InvestigationOnlineResponseBody\data;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGraph4InvestigationOnlineResponseBody\data\vertexList\neighborList;
use AlibabaCloud\Tea\Model;

class vertexList extends Model
{
    /**
     * @description Vertex name.
     *
     * @example 1a79b3a10ad5e6cad090dd697a7axxxxx
     *
     * @var string
     */
    public $name;

    /**
     * @description List of neighboring vertices of the current vertex.
     *
     * @var neighborList[]
     */
    public $neighborList;

    /**
     * @description Properties.
     *
     * @example {\\"DomainName\\": {\\"SupportScratchDetection\\": False, \\"Description\\": \\"The name of the domain.\\", \\"Required\\": True, \\"UpdateAllowed\\": False, \\"Type\\": \\"string\\", \\"Immutable\\": False}}
     *
     * @var string
     */
    public $properties;

    /**
     * @description Time.
     *
     * @example 2024-07-02 16:14:01
     *
     * @var string
     */
    public $time;

    /**
     * @description Vertex type.
     *
     * @example alert
     *
     * @var string
     */
    public $type;

    /**
     * @description Asset UUID.
     *
     * @example 5c081b02-f66a-47a4-bd2f-79ee3eafxxxx
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'name'         => 'Name',
        'neighborList' => 'NeighborList',
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
