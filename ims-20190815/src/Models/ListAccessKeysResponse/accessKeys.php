<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListAccessKeysResponse;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListAccessKeysResponse\accessKeys\accessKey;
use AlibabaCloud\Tea\Model;

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
        Model::validateRequired('accessKey', $this->accessKey, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['AccessKey'] = [];
            if (null !== $this->accessKey && \is_array($this->accessKey)) {
                $n = 0;
                foreach ($this->accessKey as $item) {
                    $res['AccessKey'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessKeys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKey'])) {
            if (!empty($map['AccessKey'])) {
                $model->accessKey = [];
                $n                = 0;
                foreach ($map['AccessKey'] as $item) {
                    $model->accessKey[$n++] = null !== $item ? accessKey::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
