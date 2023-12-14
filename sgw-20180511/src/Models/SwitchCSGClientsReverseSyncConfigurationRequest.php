<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class SwitchCSGClientsReverseSyncConfigurationRequest extends Model
{
    /**
     * @var string[]
     */
    public $clientIds;

    /**
     * @var string
     */
    public $clientRegionId;

    /**
     * @var bool
     */
    public $isReverseSync;

    /**
     * @var int
     */
    public $reverseSyncInternalSecond;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'clientIds'                 => 'ClientIds',
        'clientRegionId'            => 'ClientRegionId',
        'isReverseSync'             => 'IsReverseSync',
        'reverseSyncInternalSecond' => 'ReverseSyncInternalSecond',
        'securityToken'             => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIds) {
            $res['ClientIds'] = $this->clientIds;
        }
        if (null !== $this->clientRegionId) {
            $res['ClientRegionId'] = $this->clientRegionId;
        }
        if (null !== $this->isReverseSync) {
            $res['IsReverseSync'] = $this->isReverseSync;
        }
        if (null !== $this->reverseSyncInternalSecond) {
            $res['ReverseSyncInternalSecond'] = $this->reverseSyncInternalSecond;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwitchCSGClientsReverseSyncConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIds'])) {
            if (!empty($map['ClientIds'])) {
                $model->clientIds = $map['ClientIds'];
            }
        }
        if (isset($map['ClientRegionId'])) {
            $model->clientRegionId = $map['ClientRegionId'];
        }
        if (isset($map['IsReverseSync'])) {
            $model->isReverseSync = $map['IsReverseSync'];
        }
        if (isset($map['ReverseSyncInternalSecond'])) {
            $model->reverseSyncInternalSecond = $map['ReverseSyncInternalSecond'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
