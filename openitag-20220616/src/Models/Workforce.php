<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Tea\Model;

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
        'nodeType'   => 'NodeType',
        'users'      => 'Users',
        'workNodeId' => 'WorkNodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->users) {
            $res['Users'] = [];
            if (null !== $this->users && \is_array($this->users)) {
                $n = 0;
                foreach ($this->users as $item) {
                    $res['Users'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->workNodeId) {
            $res['WorkNodeId'] = $this->workNodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Workforce
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = [];
                $n            = 0;
                foreach ($map['Users'] as $item) {
                    $model->users[$n++] = null !== $item ? SimpleUser::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WorkNodeId'])) {
            $model->workNodeId = $map['WorkNodeId'];
        }

        return $model;
    }
}
