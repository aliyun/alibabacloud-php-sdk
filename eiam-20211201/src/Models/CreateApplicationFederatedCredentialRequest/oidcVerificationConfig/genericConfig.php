<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationFederatedCredentialRequest\oidcVerificationConfig;

use AlibabaCloud\Dara\Model;

class genericConfig extends Model
{
    /**
     * @var string
     */
    public $subject;
    protected $_name = [
        'subject' => 'Subject',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }

        return $model;
    }
}
