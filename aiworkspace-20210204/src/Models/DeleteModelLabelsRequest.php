<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class DeleteModelLabelsRequest extends Model
{
    /**
     * @example key1,key2
     *
     * @var string
     */
    public $labelKeys;
    protected $_name = [
        'labelKeys' => 'LabelKeys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labelKeys) {
            $res['LabelKeys'] = $this->labelKeys;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteModelLabelsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LabelKeys'])) {
            $model->labelKeys = $map['LabelKeys'];
        }

        return $model;
    }
}
