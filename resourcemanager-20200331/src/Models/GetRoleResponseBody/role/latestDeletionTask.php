<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetRoleResponseBody\role;

use AlibabaCloud\Tea\Model;

class latestDeletionTask extends Model
{
    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $deletionTaskId;
    protected $_name = [
        'createDate'     => 'CreateDate',
        'deletionTaskId' => 'DeletionTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->deletionTaskId) {
            $res['DeletionTaskId'] = $this->deletionTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return latestDeletionTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['DeletionTaskId'])) {
            $model->deletionTaskId = $map['DeletionTaskId'];
        }

        return $model;
    }
}
