<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListABMetricGroupsResponseBody;

use AlibabaCloud\Dara\Model;

class ABMetricGroups extends Model
{
    /**
     * @var string
     */
    public $ABMetricGroupId;
    /**
     * @var string
     */
    public $ABMetricIds;
    /**
     * @var string
     */
    public $ABMetricNames;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $owner;
    /**
     * @var bool
     */
    public $realtime;
    /**
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'ABMetricGroupId' => 'ABMetricGroupId',
        'ABMetricIds'     => 'ABMetricIds',
        'ABMetricNames'   => 'ABMetricNames',
        'description'     => 'Description',
        'name'            => 'Name',
        'owner'           => 'Owner',
        'realtime'        => 'Realtime',
        'sceneId'         => 'SceneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ABMetricGroupId) {
            $res['ABMetricGroupId'] = $this->ABMetricGroupId;
        }

        if (null !== $this->ABMetricIds) {
            $res['ABMetricIds'] = $this->ABMetricIds;
        }

        if (null !== $this->ABMetricNames) {
            $res['ABMetricNames'] = $this->ABMetricNames;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->realtime) {
            $res['Realtime'] = $this->realtime;
        }

        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
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
        if (isset($map['ABMetricGroupId'])) {
            $model->ABMetricGroupId = $map['ABMetricGroupId'];
        }

        if (isset($map['ABMetricIds'])) {
            $model->ABMetricIds = $map['ABMetricIds'];
        }

        if (isset($map['ABMetricNames'])) {
            $model->ABMetricNames = $map['ABMetricNames'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['Realtime'])) {
            $model->realtime = $map['Realtime'];
        }

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        return $model;
    }
}
