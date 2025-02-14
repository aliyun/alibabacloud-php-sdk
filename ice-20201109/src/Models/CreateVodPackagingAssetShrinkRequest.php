<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class CreateVodPackagingAssetShrinkRequest extends Model
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
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var string
     */
    public $inputShrink;
    protected $_name = [
        'assetName'   => 'AssetName',
        'contentId'   => 'ContentId',
        'description' => 'Description',
        'groupName'   => 'GroupName',
        'inputShrink' => 'Input',
    ];

    public function validate()
    {
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

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->inputShrink) {
            $res['Input'] = $this->inputShrink;
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

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['Input'])) {
            $model->inputShrink = $map['Input'];
        }

        return $model;
    }
}
