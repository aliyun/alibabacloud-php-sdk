<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerResponseBody\modelSuccess;

use AlibabaCloud\Tea\Model;

class apiImportModelSuccess extends Model
{
    /**
     * @var string
     */
    public $modelUid;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $modelOperation;
    protected $_name = [
        'modelUid'       => 'ModelUid',
        'modelName'      => 'ModelName',
        'groupId'        => 'GroupId',
        'modelOperation' => 'ModelOperation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelUid) {
            $res['ModelUid'] = $this->modelUid;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->modelOperation) {
            $res['ModelOperation'] = $this->modelOperation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiImportModelSuccess
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelUid'])) {
            $model->modelUid = $map['ModelUid'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ModelOperation'])) {
            $model->modelOperation = $map['ModelOperation'];
        }

        return $model;
    }
}
