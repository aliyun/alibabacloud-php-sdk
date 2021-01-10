<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivision\V20190308\Models;

use AlibabaCloud\Tea\Model;

class ImagePredictRequest extends Model
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
    public $modelId;

    /**
     * @var string
     */
    public $dataUrl;
    protected $_name = [
        'ownerId' => 'OwnerId',
        'showLog' => 'ShowLog',
        'modelId' => 'ModelId',
        'dataUrl' => 'DataUrl',
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
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->dataUrl) {
            $res['DataUrl'] = $this->dataUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImagePredictRequest
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
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['DataUrl'])) {
            $model->dataUrl = $map['DataUrl'];
        }

        return $model;
    }
}
