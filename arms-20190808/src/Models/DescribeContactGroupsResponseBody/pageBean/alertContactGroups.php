<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeContactGroupsResponseBody\pageBean;

use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeContactGroupsResponseBody\pageBean\alertContactGroups\contacts;
use AlibabaCloud\Tea\Model;

class alertContactGroups extends Model
{
    /**
     * @description The ID of the alert contact group.
     *
     * @example 83261
     *
     * @var int
     */
    public $armsContactGroupId;

    /**
     * @description The ID of the alert contact group.
     *
     * @example 123
     *
     * @var float
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
     * @description The contact information. If the **IsDetail** parameter is set to `false`, no **contact** information is displayed.
     *
     * @var contacts[]
     */
    public $contacts;
    protected $_name = [
        'armsContactGroupId' => 'ArmsContactGroupId',
        'contactGroupId'     => 'ContactGroupId',
        'contactGroupName'   => 'ContactGroupName',
        'contacts'           => 'Contacts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->armsContactGroupId) {
            $res['ArmsContactGroupId'] = $this->armsContactGroupId;
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertContactGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArmsContactGroupId'])) {
            $model->armsContactGroupId = $map['ArmsContactGroupId'];
        }
        if (isset($map['ContactGroupId'])) {
            $model->contactGroupId = $map['ContactGroupId'];
        }
        if (isset($map['ContactGroupName'])) {
            $model->contactGroupName = $map['ContactGroupName'];
        }
        if (isset($map['Contacts'])) {
            if (!empty($map['Contacts'])) {
                $model->contacts = [];
                $n               = 0;
                foreach ($map['Contacts'] as $item) {
                    $model->contacts[$n++] = null !== $item ? contacts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
