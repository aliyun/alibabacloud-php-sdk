<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Dara\Model;

class ObtainCloudAccountRoleAccessCredentialRequest extends Model
{
    /**
     * @var string
     */
    public $cloudAccountRoleExternalId;

    /**
     * @var int
     */
    public $durationSeconds;
    protected $_name = [
        'cloudAccountRoleExternalId' => 'cloudAccountRoleExternalId',
        'durationSeconds' => 'durationSeconds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudAccountRoleExternalId) {
            $res['cloudAccountRoleExternalId'] = $this->cloudAccountRoleExternalId;
        }

        if (null !== $this->durationSeconds) {
            $res['durationSeconds'] = $this->durationSeconds;
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
        if (isset($map['cloudAccountRoleExternalId'])) {
            $model->cloudAccountRoleExternalId = $map['cloudAccountRoleExternalId'];
        }

        if (isset($map['durationSeconds'])) {
            $model->durationSeconds = $map['durationSeconds'];
        }

        return $model;
    }
}
