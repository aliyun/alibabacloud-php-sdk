<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class RedeployDifyInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $dataRegion;

    /**
     * @var string
     */
    public $dryRun;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dataRegion' => 'DataRegion',
        'dryRun' => 'DryRun',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dataRegion) {
            $res['DataRegion'] = $this->dataRegion;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RedeployDifyInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DataRegion'])) {
            $model->dataRegion = $map['DataRegion'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
