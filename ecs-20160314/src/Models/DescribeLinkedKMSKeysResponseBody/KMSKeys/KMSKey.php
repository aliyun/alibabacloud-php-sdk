<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeLinkedKMSKeysResponseBody\KMSKeys;

use AlibabaCloud\Tea\Model;

class KMSKey extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $KMSKeyId;
    protected $_name = [
        'alias'    => 'Alias',
        'KMSKeyId' => 'KMSKeyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return KMSKey
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }

        return $model;
    }
}
