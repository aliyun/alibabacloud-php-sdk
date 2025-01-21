<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetOnCallSchedulesDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetOnCallSchedulesDetailResponseBody\data\renderedFinnalEntries;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetOnCallSchedulesDetailResponseBody\data\renderedLayerEntries;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetOnCallSchedulesDetailResponseBody\data\renderedSubstitudeEntries;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetOnCallSchedulesDetailResponseBody\data\scheduleLayers;

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
     * @var renderedLayerEntries[][]
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
        if (\is_array($this->renderedFinnalEntries)) {
            Model::validateArray($this->renderedFinnalEntries);
        }
        if (\is_array($this->renderedLayerEntries)) {
            Model::validateArray($this->renderedLayerEntries);
        }
        if (\is_array($this->renderedSubstitudeEntries)) {
            Model::validateArray($this->renderedSubstitudeEntries);
        }
        if (\is_array($this->scheduleLayers)) {
            Model::validateArray($this->scheduleLayers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->renderedFinnalEntries)) {
                $res['RenderedFinnalEntries'] = [];
                $n1                           = 0;
                foreach ($this->renderedFinnalEntries as $item1) {
                    $res['RenderedFinnalEntries'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->renderedLayerEntries) {
            if (\is_array($this->renderedLayerEntries)) {
                $res['RenderedLayerEntries'] = [];
                $n1                          = 0;
                foreach ($this->renderedLayerEntries as $item1) {
                    if (\is_array($item1)) {
                        $res['RenderedLayerEntries'][$n1++] = [];
                        $n2                                 = 0;
                        foreach ($item1 as $item2) {
                            $res['RenderedLayerEntries'][$n1++][$n2++] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                        }
                    }
                }
            }
        }

        if (null !== $this->renderedSubstitudeEntries) {
            if (\is_array($this->renderedSubstitudeEntries)) {
                $res['RenderedSubstitudeEntries'] = [];
                $n1                               = 0;
                foreach ($this->renderedSubstitudeEntries as $item1) {
                    $res['RenderedSubstitudeEntries'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->scheduleLayers) {
            if (\is_array($this->scheduleLayers)) {
                $res['ScheduleLayers'] = [];
                $n1                    = 0;
                foreach ($this->scheduleLayers as $item1) {
                    $res['ScheduleLayers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1                           = 0;
                foreach ($map['RenderedFinnalEntries'] as $item1) {
                    $model->renderedFinnalEntries[$n1++] = renderedFinnalEntries::fromMap($item1);
                }
            }
        }

        if (isset($map['RenderedLayerEntries'])) {
            if (!empty($map['RenderedLayerEntries'])) {
                $model->renderedLayerEntries = [];
                $n1                          = 0;
                foreach ($map['RenderedLayerEntries'] as $item1) {
                    if (!empty($item1)) {
                        $model->renderedLayerEntries[$n1++] = [];
                        $n2                                 = 0;
                        foreach ($item1 as $item2) {
                            $model->renderedLayerEntries[$n1++][$n2++] = renderedLayerEntries::fromMap($item2);
                        }
                    }
                }
            }
        }

        if (isset($map['RenderedSubstitudeEntries'])) {
            if (!empty($map['RenderedSubstitudeEntries'])) {
                $model->renderedSubstitudeEntries = [];
                $n1                               = 0;
                foreach ($map['RenderedSubstitudeEntries'] as $item1) {
                    $model->renderedSubstitudeEntries[$n1++] = renderedSubstitudeEntries::fromMap($item1);
                }
            }
        }

        if (isset($map['ScheduleLayers'])) {
            if (!empty($map['ScheduleLayers'])) {
                $model->scheduleLayers = [];
                $n1                    = 0;
                foreach ($map['ScheduleLayers'] as $item1) {
                    $model->scheduleLayers[$n1++] = scheduleLayers::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
