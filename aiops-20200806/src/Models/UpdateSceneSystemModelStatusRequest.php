<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class UpdateSceneSystemModelStatusRequest extends Model
{
    /**
     * @var int
     */
    public $modelId;

    /**
     * @var int
     */
    public $modelStatus;

    /**
     * @var string
     */
    public $operaUid;
    protected $_name = [
        'modelId'     => 'ModelId',
        'modelStatus' => 'ModelStatus',
        'operaUid'    => 'OperaUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->modelStatus) {
            $res['ModelStatus'] = $this->modelStatus;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSceneSystemModelStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['ModelStatus'])) {
            $model->modelStatus = $map['ModelStatus'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }

        return $model;
    }
}
