<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\GetStsTokenResponseBody;

use AlibabaCloud\Tea\Model;

class stsTokenModel extends Model
{
    /**
     * @example be4be09e-cd00-4b4c-add7-11b4d8****
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example sts****
     *
     * @var string
     */
    public $stsToken;

    /**
     * @example 105552640689****
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'sessionId' => 'SessionId',
        'stsToken'  => 'StsToken',
        'tenantId'  => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return stsTokenModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
