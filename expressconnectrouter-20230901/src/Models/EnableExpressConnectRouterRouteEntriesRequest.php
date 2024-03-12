<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\Tea\Model;

class EnableExpressConnectRouterRouteEntriesRequest extends Model
{
    /**
     * @example FF9nMec/RZ6H9oqFn1pvyir/SLRlxCCyHJonbGzqL01hiM6Jb3wJowdHvjCfog7ww1b9rSHMRFJnrUBfVba68TJg==
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 10.153.32.16/28
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @example ecr-mezk2idmsd0vx2****
     *
     * @var string
     */
    public $ecrId;

    /**
     * @example tr-hp3u4u5f03tfuljis****
     *
     * @var string
     */
    public $nexthopInstanceId;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'dryRun'               => 'DryRun',
        'ecrId'                => 'EcrId',
        'nexthopInstanceId'    => 'NexthopInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ecrId) {
            $res['EcrId'] = $this->ecrId;
        }
        if (null !== $this->nexthopInstanceId) {
            $res['NexthopInstanceId'] = $this->nexthopInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableExpressConnectRouterRouteEntriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EcrId'])) {
            $model->ecrId = $map['EcrId'];
        }
        if (isset($map['NexthopInstanceId'])) {
            $model->nexthopInstanceId = $map['NexthopInstanceId'];
        }

        return $model;
    }
}
