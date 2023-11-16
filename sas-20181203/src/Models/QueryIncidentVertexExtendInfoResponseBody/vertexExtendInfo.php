<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentVertexExtendInfoResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentVertexExtendInfoResponseBody\vertexExtendInfo\displayInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentVertexExtendInfoResponseBody\vertexExtendInfo\neighborList;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentVertexExtendInfoResponseBody\vertexExtendInfo\property;
use AlibabaCloud\Tea\Model;

class vertexExtendInfo extends Model
{
    /**
     * @description AliUid
     *
     * @example 1168908270980461
     *
     * @var string
     */
    public $aliuid;

    /**
     * @var displayInfo[]
     */
    public $displayInfo;

    /**
     * @example 1377
     *
     * @var string
     */
    public $id;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example oval:com.redhat.rhsa:def:20193878
     *
     * @var string
     */
    public $name;

    /**
     * @var neighborList[]
     */
    public $neighborList;

    /**
     * @example DIRECTORY
     *
     * @var string
     */
    public $properties;

    /**
     * @var property
     */
    public $property;

    /**
     * @example 400035
     *
     * @var string
     */
    public $ruleId;

    /**
     * @example 2021-11-06 11:00:00
     *
     * @var string
     */
    public $time;

    /**
     * @example 1645168444
     *
     * @var int
     */
    public $timestamp;

    /**
     * @example cve
     *
     * @var string
     */
    public $type;

    /**
     * @description UUID
     *
     * @example 678e29f4-d78f-4a7c-a2bc-38434a138538
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'aliuid'       => 'Aliuid',
        'displayInfo'  => 'DisplayInfo',
        'id'           => 'Id',
        'lang'         => 'Lang',
        'name'         => 'Name',
        'neighborList' => 'NeighborList',
        'properties'   => 'Properties',
        'property'     => 'Property',
        'ruleId'       => 'RuleId',
        'time'         => 'Time',
        'timestamp'    => 'Timestamp',
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
        if (null !== $this->displayInfo) {
            $res['DisplayInfo'] = [];
            if (null !== $this->displayInfo && \is_array($this->displayInfo)) {
                $n = 0;
                foreach ($this->displayInfo as $item) {
                    $res['DisplayInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->property) {
            $res['Property'] = null !== $this->property ? $this->property->toMap() : null;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
     * @return vertexExtendInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aliuid'])) {
            $model->aliuid = $map['Aliuid'];
        }
        if (isset($map['DisplayInfo'])) {
            if (!empty($map['DisplayInfo'])) {
                $model->displayInfo = [];
                $n                  = 0;
                foreach ($map['DisplayInfo'] as $item) {
                    $model->displayInfo[$n++] = null !== $item ? displayInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
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
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['Property'])) {
            $model->property = property::fromMap($map['Property']);
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
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
