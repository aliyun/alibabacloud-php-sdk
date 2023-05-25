<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerResponseBody\modelSuccess;

use AlibabaCloud\Tea\Model;

class apiImportModelSuccess extends Model
{
    /**
     * @example b2d552ed90ca435b86f7bf8d45414793
     *
     * @var string
     */
    public $groupId;

    /**
     * @example NewInstance
     *
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelOperation;

    /**
     * @example ec1946e1870d90b2d7519
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
     * @return apiImportModelSuccess
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
