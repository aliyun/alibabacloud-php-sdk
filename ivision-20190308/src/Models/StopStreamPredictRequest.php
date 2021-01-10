<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivision\V20190308\Models;

use AlibabaCloud\Tea\Model;

class StopStreamPredictRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $showLog;

    /**
     * @var string
     */
    public $predictId;
    protected $_name = [
        'ownerId'   => 'OwnerId',
        'showLog'   => 'ShowLog',
        'predictId' => 'PredictId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->showLog) {
            $res['ShowLog'] = $this->showLog;
        }
        if (null !== $this->predictId) {
            $res['PredictId'] = $this->predictId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopStreamPredictRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ShowLog'])) {
            $model->showLog = $map['ShowLog'];
        }
        if (isset($map['PredictId'])) {
            $model->predictId = $map['PredictId'];
        }

        return $model;
    }
}
