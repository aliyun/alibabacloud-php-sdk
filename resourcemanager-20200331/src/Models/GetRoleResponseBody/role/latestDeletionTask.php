<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetRoleResponseBody\role;

use AlibabaCloud\Tea\Model;

class latestDeletionTask extends Model
{
    /**
     * @var string
     */
    public $deletionTaskId;

    /**
     * @var string
     */
    public $createDate;
    protected $_name = [
        'deletionTaskId' => 'DeletionTaskId',
        'createDate'     => 'CreateDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deletionTaskId) {
            $res['DeletionTaskId'] = $this->deletionTaskId;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
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
        if (isset($map['DeletionTaskId'])) {
            $model->deletionTaskId = $map['DeletionTaskId'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        return $model;
    }
}
