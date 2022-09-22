<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeLinkedKMSKeysResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeLinkedKMSKeysResponseBody\KMSKeys\KMSKey;
use AlibabaCloud\Tea\Model;

class KMSKeys extends Model
{
    /**
     * @var KMSKey[]
     */
    public $KMSKey;
    protected $_name = [
        'KMSKey' => 'KMSKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->KMSKey) {
            $res['KMSKey'] = [];
            if (null !== $this->KMSKey && \is_array($this->KMSKey)) {
                $n = 0;
                foreach ($this->KMSKey as $item) {
                    $res['KMSKey'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return KMSKeys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KMSKey'])) {
            if (!empty($map['KMSKey'])) {
                $model->KMSKey = [];
                $n             = 0;
                foreach ($map['KMSKey'] as $item) {
                    $model->KMSKey[$n++] = null !== $item ? KMSKey::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
