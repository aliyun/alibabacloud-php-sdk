<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models\ImportSwaggerResponseBody\modelFailed;

use AlibabaCloud\Tea\Model;

class apiImportModelFailed extends Model
{
    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $modelName;
    protected $_name = [
        'errorMsg'  => 'ErrorMsg',
        'groupId'   => 'GroupId',
        'modelName' => 'ModelName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiImportModelFailed
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        return $model;
    }
}
