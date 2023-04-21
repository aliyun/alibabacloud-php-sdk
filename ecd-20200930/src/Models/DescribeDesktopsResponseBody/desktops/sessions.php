<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops;

use AlibabaCloud\Tea\Model;

class sessions extends Model
{
    /**
     * @description The ID of the user that logged on to the cloud desktop.
     *
     * @example 29615820929547****
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The time when the desktop session was established.
     *
     * @example 2021-03-07T08:23Z
     *
     * @var string
     */
    public $establishmentTime;

    /**
     * @description The name of the external user.
     *
     * @example Testname
     *
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
