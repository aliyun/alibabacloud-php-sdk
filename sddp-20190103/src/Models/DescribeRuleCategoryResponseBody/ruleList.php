<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeRuleCategoryResponseBody;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeRuleCategoryResponseBody\ruleList\childList;
use AlibabaCloud\Tea\Model;

class ruleList extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var childList[]
     */
    public $childList;
    protected $_name = [
        'name'      => 'Name',
        'groupId'   => 'GroupId',
        'childList' => 'ChildList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->childList) {
            $res['ChildList'] = [];
            if (null !== $this->childList && \is_array($this->childList)) {
                $n = 0;
                foreach ($this->childList as $item) {
                    $res['ChildList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ChildList'])) {
            if (!empty($map['ChildList'])) {
                $model->childList = [];
                $n                = 0;
                foreach ($map['ChildList'] as $item) {
                    $model->childList[$n++] = null !== $item ? childList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
