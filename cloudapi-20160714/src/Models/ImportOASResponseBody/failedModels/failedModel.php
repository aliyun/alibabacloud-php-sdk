<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody\failedModels;

use AlibabaCloud\Tea\Model;

class failedModel extends Model
{
    /**
     * @example Invalid Model Definition.
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @example 2c1bc62e19614cc68c6b0b484bc9c5db
     *
     * @var string
     */
    public $groupId;

    /**
     * @example test
     *
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
     * @return failedModel
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
