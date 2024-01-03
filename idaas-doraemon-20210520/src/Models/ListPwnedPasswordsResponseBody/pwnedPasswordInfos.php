<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListPwnedPasswordsResponseBody;

use AlibabaCloud\Tea\Model;

class pwnedPasswordInfos extends Model
{
    /**
     * @example 0000
     *
     * @var string
     */
    public $hexPasswordSha1Hash;

    /**
     * @example 84
     *
     * @var int
     */
    public $pwnedCount;
    protected $_name = [
        'hexPasswordSha1Hash' => 'HexPasswordSha1Hash',
        'pwnedCount'          => 'PwnedCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hexPasswordSha1Hash) {
            $res['HexPasswordSha1Hash'] = $this->hexPasswordSha1Hash;
        }
        if (null !== $this->pwnedCount) {
            $res['PwnedCount'] = $this->pwnedCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pwnedPasswordInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HexPasswordSha1Hash'])) {
            $model->hexPasswordSha1Hash = $map['HexPasswordSha1Hash'];
        }
        if (isset($map['PwnedCount'])) {
            $model->pwnedCount = $map['PwnedCount'];
        }

        return $model;
    }
}
