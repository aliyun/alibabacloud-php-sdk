<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;

class CreateLabelTableResponseBody extends Model
{
    /**
     * @var string
     */
    public $labelTableId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'labelTableId' => 'LabelTableId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelTableId) {
            $res['LabelTableId'] = $this->labelTableId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['LabelTableId'])) {
            $model->labelTableId = $map['LabelTableId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
