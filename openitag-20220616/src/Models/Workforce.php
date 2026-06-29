<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Dara\Model;

class Workforce extends Model
{
    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var SimpleUser[]
     */
    public $users;

    /**
     * @var int
     */
    public $workNodeId;
    protected $_name = [
        'nodeType' => 'NodeType',
        'users' => 'Users',
        'workNodeId' => 'WorkNodeId',
    ];

    public function validate()
    {
        if (\is_array($this->users)) {
            Model::validateArray($this->users);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        if (null !== $this->users) {
            if (\is_array($this->users)) {
                $res['Users'] = [];
                $n1 = 0;
                foreach ($this->users as $item1) {
                    $res['Users'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = [];
                $n1 = 0;
                foreach ($map['Users'] as $item1) {
                    $model->users[$n1] = SimpleUser::fromMap($item1);
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
