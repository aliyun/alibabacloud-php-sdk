<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\commonParam;

use AlibabaCloud\Tea\Model;

class alertList extends Model
{
    /**
     * @description Specifies whether the condition must be met.
     *
     * @example true
     *
     * @var int
     */
    public $isCritical;

    /**
     * @description The name of the alert rule.
     *
     * For network synthetic monitoring, use the following names:
     *
     *   Latency: PING_SET
     *   Packet loss rate: PING_LOST_RATE
     *   Hijacking: HIJACKPER
     *
     * @example PING_SET
     *
     * @var string
     */
    public $name;

    /**
     * @description Specifies how the condition is evaluated. Valid values:
     *
     *   1: greater than
     *   0: less than
     *
     * @example 1
     *
     * @var int
     */
    public $symbols;
    protected $_name = [
        'isCritical' => 'IsCritical',
        'name'       => 'Name',
        'symbols'    => 'Symbols',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isCritical) {
            $res['IsCritical'] = $this->isCritical;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->symbols) {
            $res['Symbols'] = $this->symbols;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsCritical'])) {
            $model->isCritical = $map['IsCritical'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Symbols'])) {
            $model->symbols = $map['Symbols'];
        }

        return $model;
    }
}
