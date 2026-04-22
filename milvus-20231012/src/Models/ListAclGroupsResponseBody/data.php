<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models\ListAclGroupsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $cidrs;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $uid;
    protected $_name = [
        'cidrs' => 'cidrs',
        'createTime' => 'createTime',
        'groupName' => 'groupName',
        'id' => 'id',
        'instanceId' => 'instanceId',
        'uid' => 'uid',
    ];

    public function validate()
    {
        if (\is_array($this->cidrs)) {
            Model::validateArray($this->cidrs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidrs) {
            if (\is_array($this->cidrs)) {
                $res['cidrs'] = [];
                $n1 = 0;
                foreach ($this->cidrs as $item1) {
                    $res['cidrs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
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
        if (isset($map['cidrs'])) {
            if (!empty($map['cidrs'])) {
                $model->cidrs = [];
                $n1 = 0;
                foreach ($map['cidrs'] as $item1) {
                    $model->cidrs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['groupName'])) {
            $model->groupName = $map['groupName'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
