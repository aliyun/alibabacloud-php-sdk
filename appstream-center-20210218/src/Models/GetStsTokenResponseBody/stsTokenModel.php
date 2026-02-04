<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210218\Models\GetStsTokenResponseBody;

use AlibabaCloud\Dara\Model;

class stsTokenModel extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $stsToken;

    /**
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'aliUid' => 'AliUid',
        'sessionId' => 'SessionId',
        'stsToken' => 'StsToken',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->stsToken) {
            $res['StsToken'] = $this->stsToken;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['StsToken'])) {
            $model->stsToken = $map['StsToken'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
