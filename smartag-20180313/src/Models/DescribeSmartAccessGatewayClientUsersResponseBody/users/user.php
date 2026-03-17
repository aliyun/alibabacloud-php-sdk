<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayClientUsersResponseBody\users;

use AlibabaCloud\Dara\Model;

class user extends Model
{
    /**
     * @var int
     */
    public $accelerateBandwidth;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var int
     */
    public $isStaticIp;

    /**
     * @var int
     */
    public $state;

    /**
     * @var string
     */
    public $userMail;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'accelerateBandwidth' => 'AccelerateBandwidth',
        'bandwidth' => 'Bandwidth',
        'clientIp' => 'ClientIp',
        'isStaticIp' => 'IsStaticIp',
        'state' => 'State',
        'userMail' => 'UserMail',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accelerateBandwidth) {
            $res['AccelerateBandwidth'] = $this->accelerateBandwidth;
        }

        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }

        if (null !== $this->isStaticIp) {
            $res['IsStaticIp'] = $this->isStaticIp;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->userMail) {
            $res['UserMail'] = $this->userMail;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccelerateBandwidth'])) {
            $model->accelerateBandwidth = $map['AccelerateBandwidth'];
        }

        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }

        if (isset($map['IsStaticIp'])) {
            $model->isStaticIp = $map['IsStaticIp'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['UserMail'])) {
            $model->userMail = $map['UserMail'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
