<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeHeadersResponseBody\customHeader;

class DescribeHeadersResponseBody extends Model
{
    /**
     * @var customHeader
     */
    public $customHeader;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'customHeader' => 'CustomHeader',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->customHeader) {
            $this->customHeader->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customHeader) {
            $res['CustomHeader'] = null !== $this->customHeader ? $this->customHeader->toArray($noStream) : $this->customHeader;
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
        if (isset($map['CustomHeader'])) {
            $model->customHeader = customHeader::fromMap($map['CustomHeader']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
