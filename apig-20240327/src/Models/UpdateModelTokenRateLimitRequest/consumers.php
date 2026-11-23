<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateModelTokenRateLimitRequest;

use AlibabaCloud\Dara\Model;

class consumers extends Model
{
    /**
     * @var string
     */
    public $consumerId;

    /**
     * @var int
     */
    public $tpm;
    protected $_name = [
        'consumerId' => 'consumerId',
        'tpm' => 'tpm',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerId) {
            $res['consumerId'] = $this->consumerId;
        }

        if (null !== $this->tpm) {
            $res['tpm'] = $this->tpm;
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
        if (isset($map['consumerId'])) {
            $model->consumerId = $map['consumerId'];
        }

        if (isset($map['tpm'])) {
            $model->tpm = $map['tpm'];
        }

        return $model;
    }
}
