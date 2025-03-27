<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\Service;

use AlibabaCloud\Dara\Model;

class labels extends Model
{
    /**
     * @var string
     */
    public $labelKey;

    /**
     * @var string
     */
    public $labelValue;
    protected $_name = [
        'labelKey' => 'LabelKey',
        'labelValue' => 'LabelValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelKey) {
            $res['LabelKey'] = $this->labelKey;
        }

        if (null !== $this->labelValue) {
            $res['LabelValue'] = $this->labelValue;
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
        if (isset($map['LabelKey'])) {
            $model->labelKey = $map['LabelKey'];
        }

        if (isset($map['LabelValue'])) {
            $model->labelValue = $map['LabelValue'];
        }

        return $model;
    }
}
