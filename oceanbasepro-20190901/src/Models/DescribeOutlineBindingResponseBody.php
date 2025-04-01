<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOutlineBindingResponseBody\outlineBinding;

class DescribeOutlineBindingResponseBody extends Model
{
    /**
     * @var outlineBinding
     */
    public $outlineBinding;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'outlineBinding' => 'OutlineBinding',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->outlineBinding) {
            $this->outlineBinding->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outlineBinding) {
            $res['OutlineBinding'] = null !== $this->outlineBinding ? $this->outlineBinding->toArray($noStream) : $this->outlineBinding;
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
        if (isset($map['OutlineBinding'])) {
            $model->outlineBinding = outlineBinding::fromMap($map['OutlineBinding']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
