<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class GetABMetricGroupResponseBody extends Model
{
    /**
     * @example 1,2
     *
     * @var string
     */
    public $ABMetricIds;

    /**
     * @example pv,uv
     *
     * @var string
     */
    public $ABMetricNames;

    /**
     * @var string
     */
    public $description;

    /**
     * @example visits
     *
     * @var string
     */
    public $name;

    /**
     * @example 2799614***
     *
     * @var string
     */
    public $owner;

    /**
     * @example false
     *
     * @var bool
     */
    public $realtime;

    /**
     * @example 01D22D08-BA20-5F35-8302-99115F288220
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'ABMetricIds'   => 'ABMetricIds',
        'ABMetricNames' => 'ABMetricNames',
        'description'   => 'Description',
        'name'          => 'Name',
        'owner'         => 'Owner',
        'realtime'      => 'Realtime',
        'requestId'     => 'RequestId',
        'sceneId'       => 'SceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetABMetricGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        return $model;
    }
}
