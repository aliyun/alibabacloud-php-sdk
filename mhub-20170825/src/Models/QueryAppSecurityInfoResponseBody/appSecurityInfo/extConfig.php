<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models\QueryAppSecurityInfoResponseBody\appSecurityInfo;

use AlibabaCloud\Tea\Model;

class extConfig extends Model
{
    /**
     * @var string
     */
    public $tlogRsaSecret;
    protected $_name = [
        'tlogRsaSecret' => 'TlogRsaSecret',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->tlogRsaSecret) {
            $res['TlogRsaSecret'] = $this->tlogRsaSecret;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TlogRsaSecret'])) {
            $model->tlogRsaSecret = $map['TlogRsaSecret'];
        }

        return $model;
    }
}
