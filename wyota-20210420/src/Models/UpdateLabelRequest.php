<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;

class UpdateLabelRequest extends Model
{
    /**
     * @var string
     */
    public $labelContent;

    /**
     * @var string
     */
    public $labelId;
    protected $_name = [
        'labelContent' => 'LabelContent',
        'labelId' => 'LabelId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelContent) {
            $res['LabelContent'] = $this->labelContent;
        }

        if (null !== $this->labelId) {
            $res['LabelId'] = $this->labelId;
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
        if (isset($map['LabelContent'])) {
            $model->labelContent = $map['LabelContent'];
        }

        if (isset($map['LabelId'])) {
            $model->labelId = $map['LabelId'];
        }

        return $model;
    }
}
