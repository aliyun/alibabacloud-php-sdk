<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeReportRecipientStatusResponseBody;

use AlibabaCloud\Dara\Model;

class reportRecipientList extends Model
{
    /**
     * @var int
     */
    public $isVerify;
    /**
     * @var string
     */
    public $recipient;
    protected $_name = [
        'isVerify'  => 'IsVerify',
        'recipient' => 'Recipient',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isVerify) {
            $res['IsVerify'] = $this->isVerify;
        }

        if (null !== $this->recipient) {
            $res['Recipient'] = $this->recipient;
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
        if (isset($map['IsVerify'])) {
            $model->isVerify = $map['IsVerify'];
        }

        if (isset($map['Recipient'])) {
            $model->recipient = $map['Recipient'];
        }

        return $model;
    }
}
