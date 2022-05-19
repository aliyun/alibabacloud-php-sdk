<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\Tea\Model;

class ListPwnedPasswordsRequest extends Model
{
    /**
     * @var string
     */
    public $prefixHexPasswordSha1Hash;
    protected $_name = [
        'prefixHexPasswordSha1Hash' => 'PrefixHexPasswordSha1Hash',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->prefixHexPasswordSha1Hash) {
            $res['PrefixHexPasswordSha1Hash'] = $this->prefixHexPasswordSha1Hash;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPwnedPasswordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrefixHexPasswordSha1Hash'])) {
            $model->prefixHexPasswordSha1Hash = $map['PrefixHexPasswordSha1Hash'];
        }

        return $model;
    }
}
