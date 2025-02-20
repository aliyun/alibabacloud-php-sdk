<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListAppReleaseStageExecutionsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var string
     */
    public $number;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var string
     */
    public $state;
    /**
     * @var string
     */
    public $triggerMode;
    protected $_name = [
        'endTime'     => 'endTime',
        'number'      => 'number',
        'startTime'   => 'startTime',
        'state'       => 'state',
        'triggerMode' => 'triggerMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->number) {
            $res['number'] = $this->number;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->triggerMode) {
            $res['triggerMode'] = $this->triggerMode;
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
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['number'])) {
            $model->number = $map['number'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['triggerMode'])) {
            $model->triggerMode = $map['triggerMode'];
        }

        return $model;
    }
}
