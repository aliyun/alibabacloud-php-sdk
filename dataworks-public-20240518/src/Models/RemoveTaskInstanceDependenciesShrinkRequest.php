<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class RemoveTaskInstanceDependenciesShrinkRequest extends Model
{
    /**
     * @description The remarks.
     *
     * @example this is a comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     *
     * @example 1234
     *
     * @var int
     */
    public $id;

    /**
     * @description The IDs of ancestor instances of the instance
     *
     * @var string
     */
    public $upstreamTaskInstanceIdsShrink;
    protected $_name = [
        'comment' => 'Comment',
        'id' => 'Id',
        'upstreamTaskInstanceIdsShrink' => 'UpstreamTaskInstanceIds',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return RemoveTaskInstanceDependenciesShrinkRequest
     */
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
