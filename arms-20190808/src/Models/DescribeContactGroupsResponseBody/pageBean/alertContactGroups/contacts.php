<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeContactGroupsResponseBody\pageBean\alertContactGroups;

use AlibabaCloud\Dara\Model;

class contacts extends Model
{
    /**
     * @var int
     */
    public $armsContactId;
    /**
     * @var float
     */
    public $contactId;
    /**
     * @var string
     */
    public $contactName;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $phone;
    protected $_name = [
        'armsContactId' => 'ArmsContactId',
        'contactId'     => 'ContactId',
        'contactName'   => 'ContactName',
        'email'         => 'Email',
        'phone'         => 'Phone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->armsContactId) {
            $res['ArmsContactId'] = $this->armsContactId;
        }

        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }

        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
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
        if (isset($map['ArmsContactId'])) {
            $model->armsContactId = $map['ArmsContactId'];
        }

        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }

        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        return $model;
    }
}
