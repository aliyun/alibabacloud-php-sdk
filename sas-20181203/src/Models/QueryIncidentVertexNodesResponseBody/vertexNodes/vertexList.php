<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentVertexNodesResponseBody\vertexNodes;

use AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentVertexNodesResponseBody\vertexNodes\vertexList\displayInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentVertexNodesResponseBody\vertexNodes\vertexList\neighborList;
use AlibabaCloud\Tea\Model;

class vertexList extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account to which the node belongs.
     *
     * @example 20973951
     *
     * @var string
     */
    public $aliuid;

    /**
     * @description The display information of the node.
     *
     * @var displayInfo[]
     */
    public $displayInfo;

    /**
     * @description The ID of the node.
     *
     * @example 225
     *
     * @var string
     */
    public $id;

    /**
     * @description The display language of the neighboring node. Valid values:
     *
     *   **zh**: Chinese.
     *   **en**: English.
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The name of the node.
     *
     * @example zabbix
     *
     * @var string
     */
    public $name;

    /**
     * @description The neighboring nodes of the node.
     *
     * @var neighborList[]
     */
    public $neighborList;

    /**
     * @description The properties of the node. The value is in the text format.
     *
     * @example {\\"bandWidth\\":\\"5120\\",\\"internetIp\\":\\"47.242.191.206\\",\\"changeReason\\":\\"EIP_BIND\\",\\"bindInstanceId\\":\\"eci-j6ci7lvci50rore7dkv8\\",\\"bindType\\":\\"EIP_ECS\\"}
     *
     * @var string
     */
    public $properties;

    /**
     * @description The property of the node.
     *
     * @var mixed[]
     */
    public $property;

    /**
     * @description The ID of the rule based on which the node was created.
     *
     * @example 171
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The time when the node was created.
     *
     * @example 1636081135
     *
     * @var string
     */
    public $time;

    /**
     * @description The time when the node was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1645179073
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description The type of the node. Valid values include but are not limited to:
     *
     *   **process**
     *   **file**
     *   **alert**
     *   **ip**
     *   **domain**
     *
     * @example sys
     *
     * @var string
     */
    public $type;

    /**
     * @description The time when the node was updated.
     *
     * @example 2021-12-16T07:20:33.000Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The UUID of the node.
     *
     * @example 02ca8614-ecdb-44d3-b3d0-158655080e4f
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
        'updateTime'   => 'UpdateTime',
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
            $res['Property'] = $this->property;
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
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
            $model->property = $map['Property'];
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
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
