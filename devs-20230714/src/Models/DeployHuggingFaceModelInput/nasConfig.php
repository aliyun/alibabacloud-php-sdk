<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\DeployHuggingFaceModelInput;

use AlibabaCloud\Dara\Model;

class nasConfig extends Model
{
    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string[]
     */
    public $mountPoints;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'groupId' => 'groupId',
        'mountPoints' => 'mountPoints',
        'userId' => 'userId',
    ];

    public function validate()
    {
        if (\is_array($this->mountPoints)) {
            Model::validateArray($this->mountPoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }

        if (null !== $this->mountPoints) {
            if (\is_array($this->mountPoints)) {
                $res['mountPoints'] = [];
                $n1 = 0;
                foreach ($this->mountPoints as $item1) {
                    $res['mountPoints'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }

        if (isset($map['mountPoints'])) {
            if (!empty($map['mountPoints'])) {
                $model->mountPoints = [];
                $n1 = 0;
                foreach ($map['mountPoints'] as $item1) {
                    $model->mountPoints[$n1++] = $item1;
                }
            }
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
