<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\BatchCreateVodPackagingAssetResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\VodPackagingAsset;
use AlibabaCloud\Tea\Model;

class resultList extends Model
{
    /**
     * @description The information about the ingested asset.
     *
     * @var VodPackagingAsset
     */
    public $asset;

    /**
     * @description The error code for failed ingestion.
     *
     * @example InvalidParameter.PackagingAssetAlreadyExists
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message for failed ingestion.
     *
     * @example The specified packagingAsset "inputMovie" already exists
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'asset'   => 'Asset',
        'code'    => 'Code',
        'message' => 'Message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asset) {
            $res['Asset'] = null !== $this->asset ? $this->asset->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Asset'])) {
            $model->asset = VodPackagingAsset::fromMap($map['Asset']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
