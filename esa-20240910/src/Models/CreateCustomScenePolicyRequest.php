<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class CreateCustomScenePolicyRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $objects;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $template;
    protected $_name = [
        'endTime' => 'EndTime',
        'name' => 'Name',
        'objects' => 'Objects',
        'startTime' => 'StartTime',
        'template' => 'Template',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->objects) {
            $res['Objects'] = $this->objects;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->template) {
            $res['Template'] = $this->template;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Objects'])) {
            $model->objects = $map['Objects'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }

        return $model;
    }
}
