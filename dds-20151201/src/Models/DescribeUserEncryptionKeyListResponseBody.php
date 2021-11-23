<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeUserEncryptionKeyListResponseBody\keyIds;
use AlibabaCloud\Tea\Model;

class DescribeUserEncryptionKeyListResponseBody extends Model
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
        'keyIds'    => 'KeyIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyIds) {
            $res['KeyIds'] = null !== $this->keyIds ? $this->keyIds->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserEncryptionKeyListResponseBody
     */
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
