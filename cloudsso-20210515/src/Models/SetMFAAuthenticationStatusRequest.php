<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;

class SetMFAAuthenticationStatusRequest extends Model
{
    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $MFAAuthenticationStatus;
    protected $_name = [
        'directoryId' => 'DirectoryId',
        'MFAAuthenticationStatus' => 'MFAAuthenticationStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->MFAAuthenticationStatus) {
            $res['MFAAuthenticationStatus'] = $this->MFAAuthenticationStatus;
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
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['MFAAuthenticationStatus'])) {
            $model->MFAAuthenticationStatus = $map['MFAAuthenticationStatus'];
        }

        return $model;
    }
}
