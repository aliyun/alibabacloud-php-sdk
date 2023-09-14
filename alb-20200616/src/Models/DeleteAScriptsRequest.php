<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class DeleteAScriptsRequest extends Model
{
    /**
     * @description The AScript rule IDs.
     *
     * @var string[]
     */
    public $AScriptIds;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     * @example f516e84e-fc0c-4c2d-a461-6cd774a84dbd
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
        'AScriptIds'  => 'AScriptIds',
        'clientToken' => 'ClientToken',
        'dryRun'      => 'DryRun',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AScriptIds) {
            $res['AScriptIds'] = $this->AScriptIds;
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
     * @return DeleteAScriptsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AScriptIds'])) {
            if (!empty($map['AScriptIds'])) {
                $model->AScriptIds = $map['AScriptIds'];
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
