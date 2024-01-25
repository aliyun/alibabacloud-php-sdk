<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class DeleteSceneModelRequest extends Model
{
    /**
     * @var int
     */
    public $modelId;

    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var bool
     */
    public $sureDelete;
    protected $_name = [
        'modelId'    => 'ModelId',
        'operaUid'   => 'OperaUid',
        'sureDelete' => 'SureDelete',
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
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->sureDelete) {
            $res['SureDelete'] = $this->sureDelete;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSceneModelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['SureDelete'])) {
            $model->sureDelete = $map['SureDelete'];
        }

        return $model;
    }
}
