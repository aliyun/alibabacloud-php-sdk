<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAclChecksResponseBody\checkRecords;

class DescribeAclChecksResponseBody extends Model
{
    /**
     * @var checkRecords
     */
    public $checkRecords;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'checkRecords' => 'CheckRecords',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->checkRecords) {
            $this->checkRecords->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkRecords) {
            $res['CheckRecords'] = null !== $this->checkRecords ? $this->checkRecords->toArray($noStream) : $this->checkRecords;
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
        if (isset($map['CheckRecords'])) {
            $model->checkRecords = checkRecords::fromMap($map['CheckRecords']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
