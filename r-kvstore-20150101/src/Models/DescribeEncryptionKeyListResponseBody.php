<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEncryptionKeyListResponseBody\keyIds;

class DescribeEncryptionKeyListResponseBody extends Model
{
    /**
     * @var keyIds
     */
    public $keyIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'keyIds' => 'KeyIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->keyIds) {
            $this->keyIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyIds) {
            $res['KeyIds'] = null !== $this->keyIds ? $this->keyIds->toArray($noStream) : $this->keyIds;
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
        if (isset($map['KeyIds'])) {
            $model->keyIds = keyIds::fromMap($map['KeyIds']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
