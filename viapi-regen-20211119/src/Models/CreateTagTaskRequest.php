<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models;

use AlibabaCloud\Tea\Model;

class CreateTagTaskRequest extends Model
{
    /**
     * @var int
     */
    public $labelsetId;
    protected $_name = [
        'labelsetId' => 'LabelsetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labelsetId) {
            $res['LabelsetId'] = $this->labelsetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTagTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LabelsetId'])) {
            $model->labelsetId = $map['LabelsetId'];
        }

        return $model;
    }
}
