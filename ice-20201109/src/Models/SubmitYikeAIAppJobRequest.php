<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SubmitYikeAIAppJobRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appParams;

    /**
     * @var string
     */
    public $folderId;

    /**
     * @var string
     */
    public $productionId;
    protected $_name = [
        'appId' => 'AppId',
        'appParams' => 'AppParams',
        'folderId' => 'FolderId',
        'productionId' => 'ProductionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appParams) {
            $res['AppParams'] = $this->appParams;
        }

        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }

        if (null !== $this->productionId) {
            $res['ProductionId'] = $this->productionId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppParams'])) {
            $model->appParams = $map['AppParams'];
        }

        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }

        if (isset($map['ProductionId'])) {
            $model->productionId = $map['ProductionId'];
        }

        return $model;
    }
}
