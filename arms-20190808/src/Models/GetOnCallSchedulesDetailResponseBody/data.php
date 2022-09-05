<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetOnCallSchedulesDetailResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetOnCallSchedulesDetailResponseBody\data\renderedFinnalEntries;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetOnCallSchedulesDetailResponseBody\data\renderedSubstitudeEntries;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetOnCallSchedulesDetailResponseBody\data\scheduleLayers;
use AlibabaCloud\SDK\ARMS\V20190808\Models\undefined;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $alertRobotId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var renderedFinnalEntries[]
     */
    public $renderedFinnalEntries;

    /**
     * @var undefined[][]
     */
    public $renderedLayerEntries;

    /**
     * @var renderedSubstitudeEntries[]
     */
    public $renderedSubstitudeEntries;

    /**
     * @var scheduleLayers[]
     */
    public $scheduleLayers;
    protected $_name = [
        'alertRobotId'              => 'AlertRobotId',
        'description'               => 'Description',
        'id'                        => 'Id',
        'name'                      => 'Name',
        'renderedFinnalEntries'     => 'RenderedFinnalEntries',
        'renderedLayerEntries'      => 'RenderedLayerEntries',
        'renderedSubstitudeEntries' => 'RenderedSubstitudeEntries',
        'scheduleLayers'            => 'ScheduleLayers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertRobotId) {
            $res['AlertRobotId'] = $this->alertRobotId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->renderedFinnalEntries) {
            $res['RenderedFinnalEntries'] = [];
            if (null !== $this->renderedFinnalEntries && \is_array($this->renderedFinnalEntries)) {
                $n = 0;
                foreach ($this->renderedFinnalEntries as $item) {
                    $res['RenderedFinnalEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->renderedLayerEntries) {
            $res['RenderedLayerEntries'] = $this->renderedLayerEntries;
        }
        if (null !== $this->renderedSubstitudeEntries) {
            $res['RenderedSubstitudeEntries'] = [];
            if (null !== $this->renderedSubstitudeEntries && \is_array($this->renderedSubstitudeEntries)) {
                $n = 0;
                foreach ($this->renderedSubstitudeEntries as $item) {
                    $res['RenderedSubstitudeEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scheduleLayers) {
            $res['ScheduleLayers'] = [];
            if (null !== $this->scheduleLayers && \is_array($this->scheduleLayers)) {
                $n = 0;
                foreach ($this->scheduleLayers as $item) {
                    $res['ScheduleLayers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertRobotId'])) {
            $model->alertRobotId = $map['AlertRobotId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RenderedFinnalEntries'])) {
            if (!empty($map['RenderedFinnalEntries'])) {
                $model->renderedFinnalEntries = [];
                $n                            = 0;
                foreach ($map['RenderedFinnalEntries'] as $item) {
                    $model->renderedFinnalEntries[$n++] = null !== $item ? renderedFinnalEntries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RenderedLayerEntries'])) {
            if (!empty($map['RenderedLayerEntries'])) {
                $model->renderedLayerEntries = $map['RenderedLayerEntries'];
            }
        }
        if (isset($map['RenderedSubstitudeEntries'])) {
            if (!empty($map['RenderedSubstitudeEntries'])) {
                $model->renderedSubstitudeEntries = [];
                $n                                = 0;
                foreach ($map['RenderedSubstitudeEntries'] as $item) {
                    $model->renderedSubstitudeEntries[$n++] = null !== $item ? renderedSubstitudeEntries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ScheduleLayers'])) {
            if (!empty($map['ScheduleLayers'])) {
                $model->scheduleLayers = [];
                $n                     = 0;
                foreach ($map['ScheduleLayers'] as $item) {
                    $model->scheduleLayers[$n++] = null !== $item ? scheduleLayers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
