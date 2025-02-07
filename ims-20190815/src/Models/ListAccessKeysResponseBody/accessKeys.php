<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListAccessKeysResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListAccessKeysResponseBody\accessKeys\accessKey;

class accessKeys extends Model
{
    /**
     * @var accessKey[]
     */
    public $accessKey;
    protected $_name = [
        'accessKey' => 'AccessKey',
    ];

    public function validate()
    {
        if (\is_array($this->accessKey)) {
            Model::validateArray($this->accessKey);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessKey) {
            if (\is_array($this->accessKey)) {
                $res['AccessKey'] = [];
                $n1               = 0;
                foreach ($this->accessKey as $item1) {
                    $res['AccessKey'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AccessKey'])) {
            if (!empty($map['AccessKey'])) {
                $model->accessKey = [];
                $n1               = 0;
                foreach ($map['AccessKey'] as $item1) {
                    $model->accessKey[$n1++] = accessKey::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
