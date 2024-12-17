<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class BatchQueryIndividuationTextRequest extends Model
{
    /**
     * @var string[]
     */
    public $textIdList;
    protected $_name = [
        'textIdList' => 'textIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->textIdList) {
            $res['textIdList'] = $this->textIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchQueryIndividuationTextRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['textIdList'])) {
            if (!empty($map['textIdList'])) {
                $model->textIdList = $map['textIdList'];
            }
        }

        return $model;
    }
}
