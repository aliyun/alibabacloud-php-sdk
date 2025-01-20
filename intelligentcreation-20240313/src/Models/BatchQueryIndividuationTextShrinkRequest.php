<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class BatchQueryIndividuationTextShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $textIdListShrink;
    protected $_name = [
        'textIdListShrink' => 'textIdList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->textIdListShrink) {
            $res['textIdList'] = $this->textIdListShrink;
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
        if (isset($map['textIdList'])) {
            $model->textIdListShrink = $map['textIdList'];
        }

        return $model;
    }
}
