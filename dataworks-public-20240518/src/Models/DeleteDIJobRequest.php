<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class DeleteDIJobRequest extends Model
{
    /**
     * @description This parameter is deprecated. Use the Id parameter instead.
     *
     * @example 11126
     *
     * @deprecated
     *
     * @var int
     */
    public $DIJobId;

    /**
     * @description The ID of the synchronization task.
     *
     * @example 11126
     *
     * @var int
     */
    public $id;

    /**
     * @description The DataWorks workspace ID.
     *
     * @example 108864
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'DIJobId'   => 'DIJobId',
        'id'        => 'Id',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDIJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DIJobId'])) {
            $model->DIJobId = $map['DIJobId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
