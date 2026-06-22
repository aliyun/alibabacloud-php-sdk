<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SMQProxy\V20260409\Models\PublishMessageRequest;

use AlibabaCloud\Dara\Model;

class messageAttributes extends Model
{
    /**
     * @var string
     */
    public $directMail;

    /**
     * @var string
     */
    public $directSMS;

    /**
     * @var string
     */
    public $push;
    protected $_name = [
        'directMail' => 'DirectMail',
        'directSMS' => 'DirectSMS',
        'push' => 'Push',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directMail) {
            $res['DirectMail'] = $this->directMail;
        }

        if (null !== $this->directSMS) {
            $res['DirectSMS'] = $this->directSMS;
        }

        if (null !== $this->push) {
            $res['Push'] = $this->push;
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
        if (isset($map['DirectMail'])) {
            $model->directMail = $map['DirectMail'];
        }

        if (isset($map['DirectSMS'])) {
            $model->directSMS = $map['DirectSMS'];
        }

        if (isset($map['Push'])) {
            $model->push = $map['Push'];
        }

        return $model;
    }
}
