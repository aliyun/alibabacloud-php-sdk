<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEncryptionKeyListResponseBody;

use AlibabaCloud\Dara\Model;

class keyIds extends Model
{
    /**
     * @var string[]
     */
    public $keyId;
    protected $_name = [
        'keyId' => 'KeyId',
    ];

    public function validate()
    {
        if (\is_array($this->keyId)) {
            Model::validateArray($this->keyId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyId) {
            if (\is_array($this->keyId)) {
                $res['KeyId'] = [];
                $n1 = 0;
                foreach ($this->keyId as $item1) {
                    $res['KeyId'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['KeyId'])) {
            if (!empty($map['KeyId'])) {
                $model->keyId = [];
                $n1 = 0;
                foreach ($map['KeyId'] as $item1) {
                    $model->keyId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
