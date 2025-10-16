<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAclCheckResponseBody\checkRecord;

class DescribeAclCheckResponseBody extends Model
{
    /**
     * @var checkRecord
     */
    public $checkRecord;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'checkRecord' => 'CheckRecord',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->checkRecord) {
            $this->checkRecord->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkRecord) {
            $res['CheckRecord'] = null !== $this->checkRecord ? $this->checkRecord->toArray($noStream) : $this->checkRecord;
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
        if (isset($map['CheckRecord'])) {
            $model->checkRecord = checkRecord::fromMap($map['CheckRecord']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
