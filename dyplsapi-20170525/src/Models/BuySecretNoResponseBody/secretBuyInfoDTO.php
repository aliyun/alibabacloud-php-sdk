<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BuySecretNoResponseBody;

use AlibabaCloud\Tea\Model;

class secretBuyInfoDTO extends Model
{
    /**
     * @example 1390000****
     *
     * @var string
     */
    public $secretNo;
    protected $_name = [
        'secretNo' => 'SecretNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->secretNo) {
            $res['SecretNo'] = $this->secretNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secretBuyInfoDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecretNo'])) {
            $model->secretNo = $map['SecretNo'];
        }

        return $model;
    }
}
