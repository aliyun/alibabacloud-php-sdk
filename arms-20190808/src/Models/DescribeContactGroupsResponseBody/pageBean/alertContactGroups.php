<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeContactGroupsResponseBody\pageBean;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeContactGroupsResponseBody\pageBean\alertContactGroups\contacts;

class alertContactGroups extends Model
{
    /**
     * @var int
     */
    public $armsContactGroupId;
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
        'armsContactGroupId' => 'ArmsContactGroupId',
        'contactGroupId'     => 'ContactGroupId',
        'contactGroupName'   => 'ContactGroupName',
        'contacts'           => 'Contacts',
    ];

    public function validate()
    {
        if (\is_array($this->contacts)) {
            Model::validateArray($this->contacts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->contacts)) {
                $res['Contacts'] = [];
                $n1              = 0;
                foreach ($this->contacts as $item1) {
                    $res['Contacts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1              = 0;
                foreach ($map['Contacts'] as $item1) {
                    $model->contacts[$n1++] = contacts::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
