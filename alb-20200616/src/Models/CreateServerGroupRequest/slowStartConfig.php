<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateServerGroupRequest;

use AlibabaCloud\Tea\Model;

class slowStartConfig extends Model
{
    /**
     * @description The duration of a slow start.
     * Default value: 30.
     * @example 30
     *
     * @var int
     */
    public $slowStartDuration;

    /**
     * @description Specifies whether to enable slow starts. Valid values:
     *
     * - false(default)
     * @example false
     *
     * @var bool
     */
    public $slowStartEnabled;
    protected $_name = [
        'slowStartDuration' => 'SlowStartDuration',
        'slowStartEnabled'  => 'SlowStartEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->slowStartDuration) {
            $res['SlowStartDuration'] = $this->slowStartDuration;
        }
        if (null !== $this->slowStartEnabled) {
            $res['SlowStartEnabled'] = $this->slowStartEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slowStartConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SlowStartDuration'])) {
            $model->slowStartDuration = $map['SlowStartDuration'];
        }
        if (isset($map['SlowStartEnabled'])) {
            $model->slowStartEnabled = $map['SlowStartEnabled'];
        }

        return $model;
    }
}
