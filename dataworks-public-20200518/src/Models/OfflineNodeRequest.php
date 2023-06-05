<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class OfflineNodeRequest extends Model
{
    /**
     * @description The ID of the DataWorks workspace. You can call the [ListProjects](~~178393~~) operation to obtain the ID.
     *
     * @example 1234
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The ID of the request. You can use the ID to locate logs and troubleshoot issues.
     *
     * @example 9527
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'nodeId'    => 'NodeId',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OfflineNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
