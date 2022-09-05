<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeContactGroupsResponseBody\pageBean;

use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeContactGroupsResponseBody\pageBean\alertContactGroups\contacts;
use AlibabaCloud\Tea\Model;

class alertContactGroups extends Model
{
    /**
     * @var float
     */
    public $contactGroupId;

    /**
     * @var string
     */
    public $contactGroupName;

    /**
     * @var contacts[]
     */
    public $contacts;
    protected $_name = [
        'contactGroupId'   => 'ContactGroupId',
        'contactGroupName' => 'ContactGroupName',
        'contacts'         => 'Contacts',
    ];

    public function validate()
    {
    }

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
