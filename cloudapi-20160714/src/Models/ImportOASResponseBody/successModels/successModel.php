<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody\successModels;

use AlibabaCloud\Tea\Model;

class successModel extends Model
{
    /**
     * @description The ID of the API group.
     *
     * @example feaccf67040643bcbdedb253e59eb527
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the model.
     *
     * @example test
     *
     * @var string
     */
    public $modelName;

    /**
     * @description The operation of the model. Valid values: CREATE and MODIFY.
     *
     * @example CREATE
     *
     * @var string
     */
    public $modelOperation;

    /**
     * @description The UID of the model.
     *
     * @example 1r4efwee19614cc68c6b0b484bc9c5dbs
     *
     * @var string
     */
    public $modelUid;
    protected $_name = [
        'groupId'        => 'GroupId',
        'modelName'      => 'ModelName',
        'modelOperation' => 'ModelOperation',
        'modelUid'       => 'ModelUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->modelOperation) {
            $res['ModelOperation'] = $this->modelOperation;
        }
        if (null !== $this->modelUid) {
            $res['ModelUid'] = $this->modelUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return successModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['ModelOperation'])) {
            $model->modelOperation = $map['ModelOperation'];
        }
        if (isset($map['ModelUid'])) {
            $model->modelUid = $map['ModelUid'];
        }

        return $model;
    }
}
