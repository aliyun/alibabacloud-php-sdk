<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetLabelDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $labelInfo;
    protected $_name = [
        'labelInfo' => 'LabelInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labelInfo) {
            $res['LabelInfo'] = $this->labelInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LabelInfo'])) {
            $model->labelInfo = $map['LabelInfo'];
        }

        return $model;
    }
}
