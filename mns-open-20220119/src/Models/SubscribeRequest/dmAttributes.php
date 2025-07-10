<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models\SubscribeRequest;

use AlibabaCloud\Dara\Model;

class dmAttributes extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $subject;
    protected $_name = [
        'accountName' => 'AccountName',
        'subject' => 'Subject',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }

        return $model;
    }
}
