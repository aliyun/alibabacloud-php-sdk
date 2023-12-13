<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest;

use AlibabaCloud\Tea\Model;

class overheadReservationOption extends Model
{
    /**
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
