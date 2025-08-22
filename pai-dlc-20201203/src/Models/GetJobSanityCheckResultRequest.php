<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class GetJobSanityCheckResultRequest extends Model
{
    /**
     * @var int
     */
    public $sanityCheckNumber;

    /**
     * @var string
     */
    public $sanityCheckPhase;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'sanityCheckNumber' => 'SanityCheckNumber',
        'sanityCheckPhase' => 'SanityCheckPhase',
        'token' => 'Token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sanityCheckNumber) {
            $res['SanityCheckNumber'] = $this->sanityCheckNumber;
        }

        if (null !== $this->sanityCheckPhase) {
            $res['SanityCheckPhase'] = $this->sanityCheckPhase;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['SanityCheckNumber'])) {
            $model->sanityCheckNumber = $map['SanityCheckNumber'];
        }

        if (isset($map['SanityCheckPhase'])) {
            $model->sanityCheckPhase = $map['SanityCheckPhase'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
