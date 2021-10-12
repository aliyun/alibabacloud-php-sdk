<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeUserEncryptionKeyListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $keyIds;
    protected $_name = [
        'keyIds' => 'KeyIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyIds) {
            $res['KeyIds'] = $this->keyIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyIds'])) {
            if (!empty($map['KeyIds'])) {
                $model->keyIds = $map['KeyIds'];
            }
        }

        return $model;
    }
}
