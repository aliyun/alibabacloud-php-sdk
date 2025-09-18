<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\ModifyExpressConnectRouterInterRegionTransitModeRequest\transitModeList;

class ModifyExpressConnectRouterInterRegionTransitModeRequest extends Model
{
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
    public $ecrId;

    /**
     * @var transitModeList[]
     */
    public $transitModeList;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'ecrId' => 'EcrId',
        'transitModeList' => 'TransitModeList',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->transitModeList)) {
            Model::validateArray($this->transitModeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->transitModeList)) {
                $res['TransitModeList'] = [];
                $n1 = 0;
                foreach ($this->transitModeList as $item1) {
                    $res['TransitModeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
                $n1 = 0;
                foreach ($map['TransitModeList'] as $item1) {
                    $model->transitModeList[$n1] = transitModeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
