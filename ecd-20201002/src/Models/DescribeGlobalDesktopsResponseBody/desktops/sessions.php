<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeGlobalDesktopsResponseBody\desktops;

use AlibabaCloud\Tea\Model;

class sessions extends Model
{
    /**
     * @example User1
     *
     * @var string
     */
    public $endUserId;

    /**
     * @example 2021-03-07T08:23Z
     *
     * @var string
     */
    public $establishmentTime;
    protected $_name = [
        'endUserId'         => 'EndUserId',
        'establishmentTime' => 'EstablishmentTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->establishmentTime) {
            $res['EstablishmentTime'] = $this->establishmentTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sessions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['EstablishmentTime'])) {
            $model->establishmentTime = $map['EstablishmentTime'];
        }

        return $model;
    }
}
