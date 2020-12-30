<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayClientUsersResponseBody\users;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var int
     */
    public $state;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $userMail;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'state'     => 'State',
        'clientIp'  => 'ClientIp',
        'userName'  => 'UserName',
        'userMail'  => 'UserMail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->userMail) {
            $res['UserMail'] = $this->userMail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['UserMail'])) {
            $model->userMail = $map['UserMail'];
        }

        return $model;
    }
}
