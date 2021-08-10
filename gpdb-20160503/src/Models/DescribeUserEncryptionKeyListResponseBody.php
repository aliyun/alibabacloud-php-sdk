<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeUserEncryptionKeyListResponseBody\kmsKeys;
use AlibabaCloud\Tea\Model;

class DescribeUserEncryptionKeyListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var kmsKeys[]
     */
    public $kmsKeys;
    protected $_name = [
        'requestId' => 'RequestId',
        'kmsKeys'   => 'KmsKeys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->kmsKeys) {
            $res['KmsKeys'] = [];
            if (null !== $this->kmsKeys && \is_array($this->kmsKeys)) {
                $n = 0;
                foreach ($this->kmsKeys as $item) {
                    $res['KmsKeys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['KmsKeys'])) {
            if (!empty($map['KmsKeys'])) {
                $model->kmsKeys = [];
                $n              = 0;
                foreach ($map['KmsKeys'] as $item) {
                    $model->kmsKeys[$n++] = null !== $item ? kmsKeys::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
