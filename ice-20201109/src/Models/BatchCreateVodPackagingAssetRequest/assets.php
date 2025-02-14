<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\BatchCreateVodPackagingAssetRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\BatchCreateVodPackagingAssetRequest\assets\input;

class assets extends Model
{
    /**
     * @var string
     */
    public $assetName;
    /**
     * @var string
     */
    public $contentId;
    /**
     * @var input
     */
    public $input;
    protected $_name = [
        'assetName' => 'AssetName',
        'contentId' => 'ContentId',
        'input'     => 'Input',
    ];

    public function validate()
    {
        if (null !== $this->input) {
            $this->input->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetName) {
            $res['AssetName'] = $this->assetName;
        }

        if (null !== $this->contentId) {
            $res['ContentId'] = $this->contentId;
        }

        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toArray($noStream) : $this->input;
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
        if (isset($map['AssetName'])) {
            $model->assetName = $map['AssetName'];
        }

        if (isset($map['ContentId'])) {
            $model->contentId = $map['ContentId'];
        }

        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }

        return $model;
    }
}
