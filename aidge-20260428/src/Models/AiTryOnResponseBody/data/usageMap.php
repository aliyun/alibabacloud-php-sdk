<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\AiTryOnResponseBody\data;

use AlibabaCloud\Dara\Model;

class usageMap extends Model
{
    /**
     * @var int
     */
    public $processedImageCount;

    /**
     * @var string
     */
    public $resolution;
    protected $_name = [
        'processedImageCount' => 'ProcessedImageCount',
        'resolution' => 'Resolution',
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

        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
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

        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }

        return $model;
    }
}
