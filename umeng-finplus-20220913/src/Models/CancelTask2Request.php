<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20220913\Models;

use AlibabaCloud\Dara\Model;

class CancelTask2Request extends Model
{
    /**
     * @var int
     */
    public $bcId;

    /**
     * @var int
     */
    public $clientId;
    protected $_name = [
        'bcId' => 'bcId',
        'clientId' => 'clientId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bcId) {
            $res['bcId'] = $this->bcId;
        }

        if (null !== $this->clientId) {
            $res['clientId'] = $this->clientId;
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
        if (isset($map['bcId'])) {
            $model->bcId = $map['bcId'];
        }

        if (isset($map['clientId'])) {
            $model->clientId = $map['clientId'];
        }

        return $model;
    }
}
