<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\BasePunishLogResponse\punishee;

use AlibabaCloud\Tea\Model;

class contentHash extends Model
{
    /**
     * @var string
     */
    public $hashHexStr;

    /**
     * @var string
     */
    public $hashName;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'hashHexStr' => 'hash_hex_str',
        'hashName'   => 'hash_name',
        'size'       => 'size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hashHexStr) {
            $res['hash_hex_str'] = $this->hashHexStr;
        }
        if (null !== $this->hashName) {
            $res['hash_name'] = $this->hashName;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contentHash
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['hash_hex_str'])) {
            $model->hashHexStr = $map['hash_hex_str'];
        }
        if (isset($map['hash_name'])) {
            $model->hashName = $map['hash_name'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
