<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class RemoveTaskInstanceDependenciesShrinkRequest extends Model
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
     * @var string
     */
    public $upstreamTaskInstanceIdsShrink;
    protected $_name = [
        'comment' => 'Comment',
        'id' => 'Id',
        'upstreamTaskInstanceIdsShrink' => 'UpstreamTaskInstanceIds',
    ];

    public function validate()
    {
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

        if (null !== $this->upstreamTaskInstanceIdsShrink) {
            $res['UpstreamTaskInstanceIds'] = $this->upstreamTaskInstanceIdsShrink;
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
            $model->upstreamTaskInstanceIdsShrink = $map['UpstreamTaskInstanceIds'];
        }

        return $model;
    }
}
