<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BuySecretNoResponseBody;

use AlibabaCloud\Dara\Model;

class secretBuyInfoDTO extends Model
{
    /**
     * @var string
     */
    public $secretNo;
    protected $_name = [
        'secretNo' => 'SecretNo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->secretNo) {
            $res['SecretNo'] = $this->secretNo;
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
        if (isset($map['SecretNo'])) {
            $model->secretNo = $map['SecretNo'];
        }

        return $model;
    }
}
