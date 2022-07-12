<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops;

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

    /**
     * @var string
     */
    public $externalUserName;
    protected $_name = [
        'endUserId'         => 'EndUserId',
        'establishmentTime' => 'EstablishmentTime',
        'externalUserName'  => 'ExternalUserName',
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
        if (null !== $this->externalUserName) {
            $res['ExternalUserName'] = $this->externalUserName;
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
        if (isset($map['ExternalUserName'])) {
            $model->externalUserName = $map['ExternalUserName'];
        }

        return $model;
    }
}
