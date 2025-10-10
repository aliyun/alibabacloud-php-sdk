<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models\QueryAppSecurityInfoResponseBody\appSecurityInfo;

use AlibabaCloud\Dara\Model;

class extConfig extends Model
{
    /**
     * @var string
     */
    public $tlogRsaSecret;
    protected $_name = [
        'tlogRsaSecret' => 'TlogRsaSecret',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tlogRsaSecret) {
            $res['TlogRsaSecret'] = $this->tlogRsaSecret;
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
        if (isset($map['TlogRsaSecret'])) {
            $model->tlogRsaSecret = $map['TlogRsaSecret'];
        }

        return $model;
    }
}
