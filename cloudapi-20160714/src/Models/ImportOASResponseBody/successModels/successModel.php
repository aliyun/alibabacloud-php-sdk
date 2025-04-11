<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody\successModels;

use AlibabaCloud\Dara\Model;

class successModel extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelOperation;

    /**
     * @var string
     */
    public $modelUid;
    protected $_name = [
        'groupId' => 'GroupId',
        'modelName' => 'ModelName',
        'modelOperation' => 'ModelOperation',
        'modelUid' => 'ModelUid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
