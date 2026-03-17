<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\AssociateSmartAGWithApplicationBandwidthPackageRequest\associateConfigs;

class AssociateSmartAGWithApplicationBandwidthPackageRequest extends Model
{
    /**
     * @var string
     */
    public $applicationBandwidthPackageId;

    /**
     * @var associateConfigs[]
     */
    public $associateConfigs;

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
    protected $_name = [
        'applicationBandwidthPackageId' => 'ApplicationBandwidthPackageId',
        'associateConfigs' => 'AssociateConfigs',
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->associateConfigs)) {
            Model::validateArray($this->associateConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationBandwidthPackageId) {
            $res['ApplicationBandwidthPackageId'] = $this->applicationBandwidthPackageId;
        }

        if (null !== $this->associateConfigs) {
            if (\is_array($this->associateConfigs)) {
                $res['AssociateConfigs'] = [];
                $n1 = 0;
                foreach ($this->associateConfigs as $item1) {
                    $res['AssociateConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['AssociateConfigs'])) {
            if (!empty($map['AssociateConfigs'])) {
                $model->associateConfigs = [];
                $n1 = 0;
                foreach ($map['AssociateConfigs'] as $item1) {
                    $model->associateConfigs[$n1] = associateConfigs::fromMap($item1);
                    ++$n1;
                }
            }
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

        return $model;
    }
}
