<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\VerifyWorkspaceAgenticFsMountRamAuthorizationResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $authorizationStatus;
    protected $_name = [
        'authorizationStatus' => 'authorizationStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationStatus) {
            $res['authorizationStatus'] = $this->authorizationStatus;
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
        if (isset($map['authorizationStatus'])) {
            $model->authorizationStatus = $map['authorizationStatus'];
        }

        return $model;
    }
}
