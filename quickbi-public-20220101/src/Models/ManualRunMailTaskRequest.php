<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class ManualRunMailTaskRequest extends Model
{
    /**
     * @var string
     */
    public $mailId;
    protected $_name = [
        'mailId' => 'MailId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mailId) {
            $res['MailId'] = $this->mailId;
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
        if (isset($map['MailId'])) {
            $model->mailId = $map['MailId'];
        }

        return $model;
    }
}
