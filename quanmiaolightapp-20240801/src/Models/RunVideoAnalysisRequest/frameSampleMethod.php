<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisRequest;

use AlibabaCloud\Tea\Model;

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
        'interval'   => 'interval',
        'methodName' => 'methodName',
        'pixel'      => 'pixel',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return frameSampleMethod
     */
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
