<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessGroupsResponseBody\accessGroups\accessGroup;

class accessGroups extends Model
{
    /**
     * @var accessGroup[]
     */
    public $accessGroup;
    protected $_name = [
        'accessGroup' => 'AccessGroup',
    ];

    public function validate()
    {
        if (\is_array($this->accessGroup)) {
            Model::validateArray($this->accessGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessGroup) {
            if (\is_array($this->accessGroup)) {
                $res['AccessGroup'] = [];
                $n1                 = 0;
                foreach ($this->accessGroup as $item1) {
                    $res['AccessGroup'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AccessGroup'])) {
            if (!empty($map['AccessGroup'])) {
                $model->accessGroup = [];
                $n1                 = 0;
                foreach ($map['AccessGroup'] as $item1) {
                    $model->accessGroup[$n1++] = accessGroup::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
