<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\ListWordGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RAI\V20240701\Models\ListWordGroupResponseBody\wordGroupInfoList\policyInfoList;

class wordGroupInfoList extends Model
{
    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var policyInfoList[]
     */
    public $policyInfoList;
    protected $_name = [
        'gmtModified' => 'GmtModified',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'policyInfoList' => 'PolicyInfoList',
    ];

    public function validate()
    {
        if (\is_array($this->policyInfoList)) {
            Model::validateArray($this->policyInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->policyInfoList) {
            if (\is_array($this->policyInfoList)) {
                $res['PolicyInfoList'] = [];
                $n1 = 0;
                foreach ($this->policyInfoList as $item1) {
                    $res['PolicyInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['PolicyInfoList'])) {
            if (!empty($map['PolicyInfoList'])) {
                $model->policyInfoList = [];
                $n1 = 0;
                foreach ($map['PolicyInfoList'] as $item1) {
                    $model->policyInfoList[$n1] = policyInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
