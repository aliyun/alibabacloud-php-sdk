<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateVSwitchCidrReservationResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 54B48E3D-DF70-471B-AA93-08E683A1B45
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the reserved CIDR block.
     *
     * @example vcr-bp1m12saqteraw3rp****
     *
     * @var string
     */
    public $vSwitchCidrReservationId;
    protected $_name = [
        'requestId'                => 'RequestId',
        'vSwitchCidrReservationId' => 'VSwitchCidrReservationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vSwitchCidrReservationId) {
            $res['VSwitchCidrReservationId'] = $this->vSwitchCidrReservationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVSwitchCidrReservationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VSwitchCidrReservationId'])) {
            $model->vSwitchCidrReservationId = $map['VSwitchCidrReservationId'];
        }

        return $model;
    }
}
