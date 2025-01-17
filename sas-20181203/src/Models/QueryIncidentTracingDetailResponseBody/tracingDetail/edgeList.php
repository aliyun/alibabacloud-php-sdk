<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentTracingDetailResponseBody\tracingDetail;

use AlibabaCloud\Dara\Model;

class edgeList extends Model
{
    /**
     * @var string
     */
    public $aliuid;
    /**
     * @var string
     */
    public $endId;
    /**
     * @var string
     */
    public $endType;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $origin;
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
    public $showType;
    /**
     * @var string
     */
    public $startId;
    /**
     * @var string
     */
    public $startType;
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
    public $typeName;
    /**
     * @var string
     */
    public $updateTime;
    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'aliuid'     => 'Aliuid',
        'endId'      => 'EndId',
        'endType'    => 'EndType',
        'name'       => 'Name',
        'origin'     => 'Origin',
        'properties' => 'Properties',
        'property'   => 'Property',
        'ruleId'     => 'RuleId',
        'showType'   => 'ShowType',
        'startId'    => 'StartId',
        'startType'  => 'StartType',
        'time'       => 'Time',
        'timestamp'  => 'Timestamp',
        'type'       => 'Type',
        'typeName'   => 'TypeName',
        'updateTime' => 'UpdateTime',
        'uuid'       => 'Uuid',
    ];

    public function validate()
    {
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

        if (null !== $this->endId) {
            $res['EndId'] = $this->endId;
        }

        if (null !== $this->endType) {
            $res['EndType'] = $this->endType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
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

        if (null !== $this->showType) {
            $res['ShowType'] = $this->showType;
        }

        if (null !== $this->startId) {
            $res['StartId'] = $this->startId;
        }

        if (null !== $this->startType) {
            $res['StartType'] = $this->startType;
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

        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
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

        if (isset($map['EndId'])) {
            $model->endId = $map['EndId'];
        }

        if (isset($map['EndType'])) {
            $model->endType = $map['EndType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
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

        if (isset($map['ShowType'])) {
            $model->showType = $map['ShowType'];
        }

        if (isset($map['StartId'])) {
            $model->startId = $map['StartId'];
        }

        if (isset($map['StartType'])) {
            $model->startType = $map['StartType'];
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

        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
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
