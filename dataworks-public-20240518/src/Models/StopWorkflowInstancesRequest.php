<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class StopWorkflowInstancesRequest extends Model
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
     * @description The workflow instance IDs.
     *
     * This parameter is required.
     *
     * @var int[]
     */
    public $ids;
    protected $_name = [
        'comment' => 'Comment',
        'ids' => 'Ids',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopWorkflowInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Ids'])) {
            if (!empty($map['Ids'])) {
                $model->ids = $map['Ids'];
            }
        }

        return $model;
    }
}
