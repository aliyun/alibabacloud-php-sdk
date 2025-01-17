<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentTracingDetailResponseBody\tracingDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentTracingDetailResponseBody\tracingDetail\vertexList\displayInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentTracingDetailResponseBody\tracingDetail\vertexList\neighborList;

class vertexList extends Model
{
    /**
     * @var string
     */
    public $aliuid;
    /**
     * @var displayInfo[]
     */
    public $displayInfo;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $lang;
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
    public $properties;
    /**
     * @var mixed[]
     */
    public $property;
    /**
     * @var string
     */
    public $ruleId;
    /**
     * @var string
     */
    public $time;
    /**
     * @var int
     */
    public $timestamp;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $updateTime;
    /**
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
        if (\is_array($this->displayInfo)) {
            Model::validateArray($this->displayInfo);
        }
        if (\is_array($this->neighborList)) {
            Model::validateArray($this->neighborList);
        }
        if (\is_array($this->property)) {
            Model::validateArray($this->property);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliuid) {
            $res['Aliuid'] = $this->aliuid;
        }

        if (null !== $this->displayInfo) {
            if (\is_array($this->displayInfo)) {
                $res['DisplayInfo'] = [];
                $n1                 = 0;
                foreach ($this->displayInfo as $item1) {
                    $res['DisplayInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->neighborList)) {
                $res['NeighborList'] = [];
                $n1                  = 0;
                foreach ($this->neighborList as $item1) {
                    $res['NeighborList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }

        if (null !== $this->property) {
            if (\is_array($this->property)) {
                $res['Property'] = [];
                foreach ($this->property as $key1 => $value1) {
                    $res['Property'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aliuid'])) {
            $model->aliuid = $map['Aliuid'];
        }

        if (isset($map['DisplayInfo'])) {
            if (!empty($map['DisplayInfo'])) {
                $model->displayInfo = [];
                $n1                 = 0;
                foreach ($map['DisplayInfo'] as $item1) {
                    $model->displayInfo[$n1++] = displayInfo::fromMap($item1);
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
                $n1                  = 0;
                foreach ($map['NeighborList'] as $item1) {
                    $model->neighborList[$n1++] = neighborList::fromMap($item1);
                }
            }
        }

        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }

        if (isset($map['Property'])) {
            if (!empty($map['Property'])) {
                $model->property = [];
                foreach ($map['Property'] as $key1 => $value1) {
                    $model->property[$key1] = $value1;
                }
            }
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
