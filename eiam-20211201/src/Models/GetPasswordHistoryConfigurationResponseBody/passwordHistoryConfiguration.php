<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetPasswordHistoryConfigurationResponseBody;

use AlibabaCloud\Dara\Model;

class passwordHistoryConfiguration extends Model
{
    /**
     * @var int
     */
    public $passwordHistoryMaxRetention;
    /**
     * @var string
     */
    public $passwordHistoryStatus;
    protected $_name = [
        'passwordHistoryMaxRetention' => 'PasswordHistoryMaxRetention',
        'passwordHistoryStatus'       => 'PasswordHistoryStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->passwordHistoryMaxRetention) {
            $res['PasswordHistoryMaxRetention'] = $this->passwordHistoryMaxRetention;
        }

        if (null !== $this->passwordHistoryStatus) {
            $res['PasswordHistoryStatus'] = $this->passwordHistoryStatus;
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
        if (isset($map['PasswordHistoryMaxRetention'])) {
            $model->passwordHistoryMaxRetention = $map['PasswordHistoryMaxRetention'];
        }

        if (isset($map['PasswordHistoryStatus'])) {
            $model->passwordHistoryStatus = $map['PasswordHistoryStatus'];
        }

        return $model;
    }
}
