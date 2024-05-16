<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ModifyExpressConnectRouterInterRegionTransitModeRequest\transitModeList;
use AlibabaCloud\Tea\Model;

class ModifyExpressConnectRouterInterRegionTransitModeRequest extends Model
{
    /**
     * @example FF9nMec/RZ6H9oqFn1pvyir/SLRlxCCyHJonbGzqL01hiM6Jb3wJowdHvjCfog7ww1b9rSHMRFJnrUBfVba68TJg==
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description This parameter is required.
     *
     * @example ecr-mezk2idmsd0vx2****
     *
     * @var string
     */
    public $ecrId;

    /**
     * @var transitModeList[]
     */
    public $transitModeList;
    protected $_name = [
        'clientToken'     => 'ClientToken',
        'dryRun'          => 'DryRun',
        'ecrId'           => 'EcrId',
        'transitModeList' => 'TransitModeList',
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
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ecrId) {
            $res['EcrId'] = $this->ecrId;
        }
        if (null !== $this->transitModeList) {
            $res['TransitModeList'] = [];
            if (null !== $this->transitModeList && \is_array($this->transitModeList)) {
                $n = 0;
                foreach ($this->transitModeList as $item) {
                    $res['TransitModeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyExpressConnectRouterInterRegionTransitModeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EcrId'])) {
            $model->ecrId = $map['EcrId'];
        }
        if (isset($map['TransitModeList'])) {
            if (!empty($map['TransitModeList'])) {
                $model->transitModeList = [];
                $n                      = 0;
                foreach ($map['TransitModeList'] as $item) {
                    $model->transitModeList[$n++] = null !== $item ? transitModeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
