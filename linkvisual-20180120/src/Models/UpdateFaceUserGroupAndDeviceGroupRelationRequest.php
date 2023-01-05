<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateFaceUserGroupAndDeviceGroupRelationRequest extends Model
{
    /**
     * @example qcb2yea4ha4d****
     *
     * @var string
     */
    public $controlId;

    /**
     * @example ZheJiangHZ
     *
     * @var string
     */
    public $isolationId;

    /**
     * @example SYNC_INFO_PICTURE
     *
     * @var string
     */
    public $relation;
    protected $_name = [
        'controlId'   => 'ControlId',
        'isolationId' => 'IsolationId',
        'relation'    => 'Relation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->controlId) {
            $res['ControlId'] = $this->controlId;
        }
        if (null !== $this->isolationId) {
            $res['IsolationId'] = $this->isolationId;
        }
        if (null !== $this->relation) {
            $res['Relation'] = $this->relation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFaceUserGroupAndDeviceGroupRelationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ControlId'])) {
            $model->controlId = $map['ControlId'];
        }
        if (isset($map['IsolationId'])) {
            $model->isolationId = $map['IsolationId'];
        }
        if (isset($map['Relation'])) {
            $model->relation = $map['Relation'];
        }

        return $model;
    }
}
