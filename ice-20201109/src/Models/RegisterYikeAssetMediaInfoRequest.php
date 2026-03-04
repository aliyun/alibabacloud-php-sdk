<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class RegisterYikeAssetMediaInfoRequest extends Model
{
    /**
     * @var string
     */
    public $folderId;

    /**
     * @var string
     */
    public $inputURL;

    /**
     * @var string
     */
    public $mediaType;

    /**
     * @var string
     */
    public $productionId;
    protected $_name = [
        'folderId' => 'FolderId',
        'inputURL' => 'InputURL',
        'mediaType' => 'MediaType',
        'productionId' => 'ProductionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }

        if (null !== $this->inputURL) {
            $res['InputURL'] = $this->inputURL;
        }

        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
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
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }

        if (isset($map['InputURL'])) {
            $model->inputURL = $map['InputURL'];
        }

        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }

        if (isset($map['ProductionId'])) {
            $model->productionId = $map['ProductionId'];
        }

        return $model;
    }
}
