<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\AiTryOnResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\AiTryOnResponseBody\data\usageMap;

class data extends Model
{
    /**
     * @var string
     */
    public $imageHeight;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $imageWidth;

    /**
     * @var usageMap
     */
    public $usageMap;
    protected $_name = [
        'imageHeight' => 'ImageHeight',
        'imageUrl' => 'ImageUrl',
        'imageWidth' => 'ImageWidth',
        'usageMap' => 'UsageMap',
    ];

    public function validate()
    {
        if (null !== $this->usageMap) {
            $this->usageMap->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageHeight) {
            $res['ImageHeight'] = $this->imageHeight;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->imageWidth) {
            $res['ImageWidth'] = $this->imageWidth;
        }

        if (null !== $this->usageMap) {
            $res['UsageMap'] = null !== $this->usageMap ? $this->usageMap->toArray($noStream) : $this->usageMap;
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
        if (isset($map['ImageHeight'])) {
            $model->imageHeight = $map['ImageHeight'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['ImageWidth'])) {
            $model->imageWidth = $map['ImageWidth'];
        }

        if (isset($map['UsageMap'])) {
            $model->usageMap = usageMap::fromMap($map['UsageMap']);
        }

        return $model;
    }
}
