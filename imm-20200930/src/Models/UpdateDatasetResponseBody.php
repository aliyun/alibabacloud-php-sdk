<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class UpdateDatasetResponseBody extends Model
{
    /**
     * @var Dataset
     */
    public $dataset;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataset' => 'Dataset',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->dataset) {
            $this->dataset->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataset) {
            $res['Dataset'] = null !== $this->dataset ? $this->dataset->toArray($noStream) : $this->dataset;
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
        if (isset($map['Dataset'])) {
            $model->dataset = Dataset::fromMap($map['Dataset']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
