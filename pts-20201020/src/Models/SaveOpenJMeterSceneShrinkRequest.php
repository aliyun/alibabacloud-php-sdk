<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Tea\Model;

class SaveOpenJMeterSceneShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $openJMeterSceneShrink;
    protected $_name = [
        'openJMeterSceneShrink' => 'OpenJMeterScene',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->openJMeterSceneShrink) {
            $res['OpenJMeterScene'] = $this->openJMeterSceneShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveOpenJMeterSceneShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpenJMeterScene'])) {
            $model->openJMeterSceneShrink = $map['OpenJMeterScene'];
        }

        return $model;
    }
}
