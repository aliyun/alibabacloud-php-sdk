<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UpdateTaskFlowOwnerRequest extends Model
{
    /**
     * @var int
     */
    public $dagId;

    /**
     * @var string
     */
    public $newOwnerId;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'dagId'      => 'DagId',
        'newOwnerId' => 'NewOwnerId',
        'tid'        => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->newOwnerId) {
            $res['NewOwnerId'] = $this->newOwnerId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTaskFlowOwnerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['NewOwnerId'])) {
            $model->newOwnerId = $map['NewOwnerId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
