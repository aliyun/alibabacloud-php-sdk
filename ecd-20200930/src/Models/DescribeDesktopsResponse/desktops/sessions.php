<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponse\desktops;

use AlibabaCloud\Tea\Model;

class sessions extends Model
{
    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $establishmentTime;
    protected $_name = [
        'endUserId'         => 'EndUserId',
        'establishmentTime' => 'EstablishmentTime',
    ];

    public function validate()
    {
        Model::validateRequired('endUserId', $this->endUserId, true);
        Model::validateRequired('establishmentTime', $this->establishmentTime, true);
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
