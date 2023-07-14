<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeContactGroupsResponseBody\pageBean\alertContactGroups;

use AlibabaCloud\Tea\Model;

class contacts extends Model
{
    /**
     * @example 100117
     *
     * @var int
     */
    public $armsContactId;

    /**
     * @example 456
     *
     * @var float
     */
    public $contactId;

    /**
     * @example John Doe
     *
     * @var string
     */
    public $contactName;

    /**
     * @example someone@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @example 1381111****
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return contacts
     */
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
