<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactGroupListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactGroupListResponseBody\contactGroupList\contactGroup;

class contactGroupList extends Model
{
    /**
     * @var contactGroup[]
     */
    public $contactGroup;
    protected $_name = [
        'contactGroup' => 'ContactGroup',
    ];

    public function validate()
    {
        if (\is_array($this->contactGroup)) {
            Model::validateArray($this->contactGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactGroup) {
            if (\is_array($this->contactGroup)) {
                $res['ContactGroup'] = [];
                $n1 = 0;
                foreach ($this->contactGroup as $item1) {
                    $res['ContactGroup'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ContactGroup'])) {
            if (!empty($map['ContactGroup'])) {
                $model->contactGroup = [];
                $n1 = 0;
                foreach ($map['ContactGroup'] as $item1) {
                    $model->contactGroup[$n1] = contactGroup::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
