<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class DeleteDatasetLabelsRequest extends Model
{
    /**
     * @var string
     */
    public $labelKeys;
    protected $_name = [
        'labelKeys' => 'LabelKeys',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelKeys) {
            $res['LabelKeys'] = $this->labelKeys;
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
        if (isset($map['LabelKeys'])) {
            $model->labelKeys = $map['LabelKeys'];
        }

        return $model;
    }
}
