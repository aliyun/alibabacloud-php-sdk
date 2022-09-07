<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateAuthorizationRulesRequest\authorizationRules;
use AlibabaCloud\Tea\Model;

class CreateAuthorizationRulesRequest extends Model
{
    /**
     * @var authorizationRules[]
     */
    public $authorizationRules;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $ioTCloudConnectorId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'authorizationRules'  => 'AuthorizationRules',
        'clientToken'         => 'ClientToken',
        'dryRun'              => 'DryRun',
        'ioTCloudConnectorId' => 'IoTCloudConnectorId',
        'regionId'            => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationRules) {
            $res['AuthorizationRules'] = [];
            if (null !== $this->authorizationRules && \is_array($this->authorizationRules)) {
                $n = 0;
                foreach ($this->authorizationRules as $item) {
                    $res['AuthorizationRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ioTCloudConnectorId) {
            $res['IoTCloudConnectorId'] = $this->ioTCloudConnectorId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAuthorizationRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationRules'])) {
            if (!empty($map['AuthorizationRules'])) {
                $model->authorizationRules = [];
                $n                         = 0;
                foreach ($map['AuthorizationRules'] as $item) {
                    $model->authorizationRules[$n++] = null !== $item ? authorizationRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['IoTCloudConnectorId'])) {
            $model->ioTCloudConnectorId = $map['IoTCloudConnectorId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
