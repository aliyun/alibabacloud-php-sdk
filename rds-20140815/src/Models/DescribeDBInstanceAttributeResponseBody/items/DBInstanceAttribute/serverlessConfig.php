<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute;

use AlibabaCloud\Dara\Model;

class serverlessConfig extends Model
{
    /**
     * @var bool
     */
    public $autoPause;
    /**
     * @var float
     */
    public $scaleMax;
    /**
     * @var float
     */
    public $scaleMin;
    /**
     * @var bool
     */
    public $switchForce;
    protected $_name = [
        'autoPause'   => 'AutoPause',
        'scaleMax'    => 'ScaleMax',
        'scaleMin'    => 'ScaleMin',
        'switchForce' => 'SwitchForce',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPause) {
            $res['AutoPause'] = $this->autoPause;
        }

        if (null !== $this->scaleMax) {
            $res['ScaleMax'] = $this->scaleMax;
        }

        if (null !== $this->scaleMin) {
            $res['ScaleMin'] = $this->scaleMin;
        }

        if (null !== $this->switchForce) {
            $res['SwitchForce'] = $this->switchForce;
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
        if (isset($map['AutoPause'])) {
            $model->autoPause = $map['AutoPause'];
        }

        if (isset($map['ScaleMax'])) {
            $model->scaleMax = $map['ScaleMax'];
        }

        if (isset($map['ScaleMin'])) {
            $model->scaleMin = $map['ScaleMin'];
        }

        if (isset($map['SwitchForce'])) {
            $model->switchForce = $map['SwitchForce'];
        }

        return $model;
    }
}
