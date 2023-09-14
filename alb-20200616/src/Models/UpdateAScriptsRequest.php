<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateAScriptsRequest\AScripts;
use AlibabaCloud\Tea\Model;

class UpdateAScriptsRequest extends Model
{
    /**
     * @description The AScript rules.
     *
     * @var AScripts[]
     */
    public $AScripts;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * > If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example b1f642ac-5558-4a36-b7d9-cf53f40ea5c8
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
    protected $_name = [
        'AScripts'    => 'AScripts',
        'clientToken' => 'ClientToken',
        'dryRun'      => 'DryRun',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAScriptsRequest
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

        return $model;
    }
}
