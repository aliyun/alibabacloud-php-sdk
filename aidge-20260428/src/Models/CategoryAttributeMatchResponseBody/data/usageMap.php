<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\CategoryAttributeMatchResponseBody\data;

use AlibabaCloud\Dara\Model;

class usageMap extends Model
{
    /**
     * @var int
     */
    public $processingCount;
    protected $_name = [
        'processingCount' => 'ProcessingCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->processingCount) {
            $res['ProcessingCount'] = $this->processingCount;
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
        if (isset($map['ProcessingCount'])) {
            $model->processingCount = $map['ProcessingCount'];
        }

        return $model;
    }
}
