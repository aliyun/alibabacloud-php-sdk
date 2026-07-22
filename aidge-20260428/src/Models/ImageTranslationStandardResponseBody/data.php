<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\ImageTranslationStandardResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ImageTranslationStandardResponseBody\data\editInfo;

class data extends Model
{
    /**
     * @var editInfo
     */
    public $editInfo;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var int[]
     */
    public $usageMap;
    protected $_name = [
        'editInfo' => 'EditInfo',
        'imageUrl' => 'ImageUrl',
        'usageMap' => 'UsageMap',
    ];

    public function validate()
    {
        if (null !== $this->editInfo) {
            $this->editInfo->validate();
        }
        if (\is_array($this->usageMap)) {
            Model::validateArray($this->usageMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->editInfo) {
            $res['EditInfo'] = null !== $this->editInfo ? $this->editInfo->toArray($noStream) : $this->editInfo;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->usageMap) {
            if (\is_array($this->usageMap)) {
                $res['UsageMap'] = [];
                foreach ($this->usageMap as $key1 => $value1) {
                    $res['UsageMap'][$key1] = $value1;
                }
            }
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
        if (isset($map['EditInfo'])) {
            $model->editInfo = editInfo::fromMap($map['EditInfo']);
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['UsageMap'])) {
            if (!empty($map['UsageMap'])) {
                $model->usageMap = [];
                foreach ($map['UsageMap'] as $key1 => $value1) {
                    $model->usageMap[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
