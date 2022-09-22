<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeKMSKeysResponseBody;

use AlibabaCloud\Tea\Model;

class KMSKeyIds extends Model
{
    /**
     * @var string[]
     */
    public $kmsKeyId;
    protected $_name = [
        'kmsKeyId' => 'kmsKeyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kmsKeyId) {
            $res['kmsKeyId'] = $this->kmsKeyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return KMSKeyIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['kmsKeyId'])) {
            if (!empty($map['kmsKeyId'])) {
                $model->kmsKeyId = $map['kmsKeyId'];
            }
        }

        return $model;
    }
}
