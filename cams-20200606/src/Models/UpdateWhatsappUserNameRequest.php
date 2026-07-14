<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;

class UpdateWhatsappUserNameRequest extends Model
{
    /**
     * @var string
     */
    public $custSpaceId;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $transferAction;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'custSpaceId' => 'CustSpaceId',
        'phoneNumber' => 'PhoneNumber',
        'transferAction' => 'TransferAction',
        'username' => 'Username',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }

        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }

        if (null !== $this->transferAction) {
            $res['TransferAction'] = $this->transferAction;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
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
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }

        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }

        if (isset($map['TransferAction'])) {
            $model->transferAction = $map['TransferAction'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
