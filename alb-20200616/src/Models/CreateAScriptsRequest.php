<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\CreateAScriptsRequest\AScripts;
use AlibabaCloud\Tea\Model;

class CreateAScriptsRequest extends Model
{
    /**
     * @description The information about the AScript rules.
     *
     * @var AScripts[]
     */
    public $AScripts;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF3898
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false**(default): performs a dry run and performs the actual request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The listener ID.
     *
     * This parameter is required.
     * @example lsn-6hfq3zs0x04ibn****
     *
     * @var string
     */
    public $listenerId;
    protected $_name = [
        'AScripts'    => 'AScripts',
        'clientToken' => 'ClientToken',
        'dryRun'      => 'DryRun',
        'listenerId'  => 'ListenerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AScripts) {
            $res['AScripts'] = [];
            if (null !== $this->AScripts && \is_array($this->AScripts)) {
                $n = 0;
                foreach ($this->AScripts as $item) {
                    $res['AScripts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAScriptsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AScripts'])) {
            if (!empty($map['AScripts'])) {
                $model->AScripts = [];
                $n               = 0;
                foreach ($map['AScripts'] as $item) {
                    $model->AScripts[$n++] = null !== $item ? AScripts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }

        return $model;
    }
}
