<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\ImageUpscaleResponseBody\data;

use AlibabaCloud\Dara\Model;

class usageMap extends Model
{
    /**
     * @var int
     */
    public $processedImageCount;
    protected $_name = [
        'processedImageCount' => 'ProcessedImageCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->processedImageCount) {
            $res['ProcessedImageCount'] = $this->processedImageCount;
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
        if (isset($map['ProcessedImageCount'])) {
            $model->processedImageCount = $map['ProcessedImageCount'];
        }

        return $model;
    }
}
