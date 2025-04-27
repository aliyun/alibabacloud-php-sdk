<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeUserEncryptionKeyListResponseBody\kmsKeys;

class DescribeUserEncryptionKeyListResponseBody extends Model
{
    /**
     * @var kmsKeys[]
     */
    public $kmsKeys;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'kmsKeys' => 'KmsKeys',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->kmsKeys)) {
            Model::validateArray($this->kmsKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kmsKeys) {
            if (\is_array($this->kmsKeys)) {
                $res['KmsKeys'] = [];
                $n1 = 0;
                foreach ($this->kmsKeys as $item1) {
                    $res['KmsKeys'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['KmsKeys'])) {
            if (!empty($map['KmsKeys'])) {
                $model->kmsKeys = [];
                $n1 = 0;
                foreach ($map['KmsKeys'] as $item1) {
                    $model->kmsKeys[$n1++] = kmsKeys::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
