<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\BatchCreateVodPackagingAssetResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\VodPackagingAsset;

class resultList extends Model
{
    /**
     * @var VodPackagingAsset
     */
    public $asset;
    /**
     * @var string
     */
    public $code;
    /**
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
        if (null !== $this->asset) {
            $this->asset->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asset) {
            $res['Asset'] = null !== $this->asset ? $this->asset->toArray($noStream) : $this->asset;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
