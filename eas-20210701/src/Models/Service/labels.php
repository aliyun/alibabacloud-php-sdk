<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\Service;

use AlibabaCloud\Tea\Model;

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
        'labelKey'   => 'LabelKey',
        'labelValue' => 'LabelValue',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return labels
     */
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
