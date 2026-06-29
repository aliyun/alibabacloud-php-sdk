<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Dara\Model;

class SimpleWorkforce extends Model
{
    /**
     * @var int[]
     */
    public $userIds;

    /**
     * @var int
     */
    public $workNodeId;
    protected $_name = [
        'userIds' => 'UserIds',
        'workNodeId' => 'WorkNodeId',
    ];

    public function validate()
    {
        if (\is_array($this->userIds)) {
            Model::validateArray($this->userIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userIds) {
            if (\is_array($this->userIds)) {
                $res['UserIds'] = [];
                $n1 = 0;
                foreach ($this->userIds as $item1) {
                    $res['UserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workNodeId) {
            $res['WorkNodeId'] = $this->workNodeId;
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
        if (isset($map['UserIds'])) {
            if (!empty($map['UserIds'])) {
                $model->userIds = [];
                $n1 = 0;
                foreach ($map['UserIds'] as $item1) {
                    $model->userIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WorkNodeId'])) {
            $model->workNodeId = $map['WorkNodeId'];
        }

        return $model;
    }
}
