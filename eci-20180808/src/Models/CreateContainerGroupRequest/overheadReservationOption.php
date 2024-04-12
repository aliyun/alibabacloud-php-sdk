<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest;

use AlibabaCloud\Tea\Model;

class overheadReservationOption extends Model
{
    /**
     * @description Specify whether to enable the overhead reservation feature. Default: false. Valid values: true and false. After you enable the overhead reservation feature, the system automatically adds the overhead to the specification of the elastic container instance, and then adjusts the specification of the instance upward to the most approximate specification. You are charged based on the new specification after the adjustment.
     *
     * @example true
     *
     * @var bool
     */
    public $enableOverheadReservation;
    protected $_name = [
        'enableOverheadReservation' => 'EnableOverheadReservation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableOverheadReservation) {
            $res['EnableOverheadReservation'] = $this->enableOverheadReservation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return overheadReservationOption
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableOverheadReservation'])) {
            $model->enableOverheadReservation = $map['EnableOverheadReservation'];
        }

        return $model;
    }
}
