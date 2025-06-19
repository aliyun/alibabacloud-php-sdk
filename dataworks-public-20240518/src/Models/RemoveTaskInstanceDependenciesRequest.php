<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class RemoveTaskInstanceDependenciesRequest extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int[]
     */
    public $upstreamTaskInstanceIds;
    protected $_name = [
        'comment' => 'Comment',
        'id' => 'Id',
        'upstreamTaskInstanceIds' => 'UpstreamTaskInstanceIds',
    ];

    public function validate()
    {
        if (\is_array($this->upstreamTaskInstanceIds)) {
            Model::validateArray($this->upstreamTaskInstanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->upstreamTaskInstanceIds) {
            if (\is_array($this->upstreamTaskInstanceIds)) {
                $res['UpstreamTaskInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->upstreamTaskInstanceIds as $item1) {
                    $res['UpstreamTaskInstanceIds'][$n1] = $item1;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['UpstreamTaskInstanceIds'])) {
            if (!empty($map['UpstreamTaskInstanceIds'])) {
                $model->upstreamTaskInstanceIds = [];
                $n1 = 0;
                foreach ($map['UpstreamTaskInstanceIds'] as $item1) {
                    $model->upstreamTaskInstanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
