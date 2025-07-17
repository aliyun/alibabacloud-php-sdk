<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertContactGroupResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertContactGroupResponseBody\contactGroups\contacts;
use AlibabaCloud\Tea\Model;

class contactGroups extends Model
{
    /**
     * @description The ID of the alert contact group.
     *
     * @example 746
     *
     * @var int
     */
    public $contactGroupId;

    /**
     * @description The name of the alert contact group.
     *
     * @example TestGroup
     *
     * @var string
     */
    public $contactGroupName;

    /**
     * @description The alert contact list.
     *
     * @var contacts[]
     */
    public $contacts;

    /**
     * @description The time when the alert contact group list was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1529668855000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The time when the alert contact group was last modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1529668855000
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description The ID of the user.
     *
     * @example 113197164949****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'contactGroupId' => 'ContactGroupId',
        'contactGroupName' => 'ContactGroupName',
        'contacts' => 'Contacts',
        'createTime' => 'CreateTime',
        'updateTime' => 'UpdateTime',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroupId) {
            $res['ContactGroupId'] = $this->contactGroupId;
        }
        if (null !== $this->contactGroupName) {
            $res['ContactGroupName'] = $this->contactGroupName;
        }
        if (null !== $this->contacts) {
            $res['Contacts'] = [];
            if (null !== $this->contacts && \is_array($this->contacts)) {
                $n = 0;
                foreach ($this->contacts as $item) {
                    $res['Contacts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contactGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroupId'])) {
            $model->contactGroupId = $map['ContactGroupId'];
        }
        if (isset($map['ContactGroupName'])) {
            $model->contactGroupName = $map['ContactGroupName'];
        }
        if (isset($map['Contacts'])) {
            if (!empty($map['Contacts'])) {
                $model->contacts = [];
                $n = 0;
                foreach ($map['Contacts'] as $item) {
                    $model->contacts[$n++] = null !== $item ? contacts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
