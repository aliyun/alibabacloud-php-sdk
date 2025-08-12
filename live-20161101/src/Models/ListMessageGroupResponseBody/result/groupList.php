<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListMessageGroupResponseBody\result;

use AlibabaCloud\Dara\Model;

class groupList extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string[]
     */
    public $extension;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'appId' => 'AppId',
        'createTime' => 'CreateTime',
        'creatorId' => 'CreatorId',
        'extension' => 'Extension',
        'groupId' => 'GroupId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->extension)) {
            Model::validateArray($this->extension);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }

        if (null !== $this->extension) {
            if (\is_array($this->extension)) {
                $res['Extension'] = [];
                foreach ($this->extension as $key1 => $value1) {
                    $res['Extension'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }

        if (isset($map['Extension'])) {
            if (!empty($map['Extension'])) {
                $model->extension = [];
                foreach ($map['Extension'] as $key1 => $value1) {
                    $model->extension[$key1] = $value1;
                }
            }
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
