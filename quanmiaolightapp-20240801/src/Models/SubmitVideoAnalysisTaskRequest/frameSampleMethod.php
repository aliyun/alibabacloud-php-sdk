<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitVideoAnalysisTaskRequest;

use AlibabaCloud\Dara\Model;

class frameSampleMethod extends Model
{
    /**
     * @var float
     */
    public $interval;

    /**
     * @var string
     */
    public $methodName;

    /**
     * @var int
     */
    public $pixel;
    protected $_name = [
        'interval' => 'interval',
        'methodName' => 'methodName',
        'pixel' => 'pixel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->interval) {
            $res['interval'] = $this->interval;
        }

        if (null !== $this->methodName) {
            $res['methodName'] = $this->methodName;
        }

        if (null !== $this->pixel) {
            $res['pixel'] = $this->pixel;
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
        if (isset($map['interval'])) {
            $model->interval = $map['interval'];
        }

        if (isset($map['methodName'])) {
            $model->methodName = $map['methodName'];
        }

        if (isset($map['pixel'])) {
            $model->pixel = $map['pixel'];
        }

        return $model;
    }
}
