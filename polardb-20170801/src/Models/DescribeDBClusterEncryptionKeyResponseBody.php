<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterEncryptionKeyResponseBody\encryptionKeyList;

class DescribeDBClusterEncryptionKeyResponseBody extends Model
{
    /**
     * @var encryptionKeyList[]
     */
    public $encryptionKeyList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'encryptionKeyList' => 'EncryptionKeyList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->encryptionKeyList)) {
            Model::validateArray($this->encryptionKeyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->encryptionKeyList) {
            if (\is_array($this->encryptionKeyList)) {
                $res['EncryptionKeyList'] = [];
                $n1 = 0;
                foreach ($this->encryptionKeyList as $item1) {
                    $res['EncryptionKeyList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['EncryptionKeyList'])) {
            if (!empty($map['EncryptionKeyList'])) {
                $model->encryptionKeyList = [];
                $n1 = 0;
                foreach ($map['EncryptionKeyList'] as $item1) {
                    $model->encryptionKeyList[$n1] = encryptionKeyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
