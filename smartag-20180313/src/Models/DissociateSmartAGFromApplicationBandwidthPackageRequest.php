<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;

class DissociateSmartAGFromApplicationBandwidthPackageRequest extends Model
{
    /**
     * @var string
     */
    public $applicationBandwidthPackageId;

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
    public $regionId;

    /**
     * @var string
     */
    public $smartAGId;

    /**
     * @var string[]
     */
    public $smartAGIdList;
    protected $_name = [
        'applicationBandwidthPackageId' => 'ApplicationBandwidthPackageId',
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'regionId' => 'RegionId',
        'smartAGId' => 'SmartAGId',
        'smartAGIdList' => 'SmartAGIdList',
    ];

    public function validate()
    {
        if (\is_array($this->smartAGIdList)) {
            Model::validateArray($this->smartAGIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationBandwidthPackageId) {
            $res['ApplicationBandwidthPackageId'] = $this->applicationBandwidthPackageId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }

        if (null !== $this->smartAGIdList) {
            if (\is_array($this->smartAGIdList)) {
                $res['SmartAGIdList'] = [];
                $n1 = 0;
                foreach ($this->smartAGIdList as $item1) {
                    $res['SmartAGIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ApplicationBandwidthPackageId'])) {
            $model->applicationBandwidthPackageId = $map['ApplicationBandwidthPackageId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }

        if (isset($map['SmartAGIdList'])) {
            if (!empty($map['SmartAGIdList'])) {
                $model->smartAGIdList = [];
                $n1 = 0;
                foreach ($map['SmartAGIdList'] as $item1) {
                    $model->smartAGIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
