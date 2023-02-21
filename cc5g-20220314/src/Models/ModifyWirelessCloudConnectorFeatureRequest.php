<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\Tea\Model;

class ModifyWirelessCloudConnectorFeatureRequest extends Model
{
    /**
     * @example TF-******-1633255280-43c94bf7-2dd3-4c14-8
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
     * @example DirectMode
     *
     * @var string
     */
    public $featureName;

    /**
     * @example On
     *
     * @var string
     */
    public $featureValue;

    /**
     * @example cc5g-xxxx
     *
     * @var string
     */
    public $wirelessCloudConnectorId;
    protected $_name = [
        'clientToken'              => 'ClientToken',
        'dryRun'                   => 'DryRun',
        'featureName'              => 'FeatureName',
        'featureValue'             => 'FeatureValue',
        'wirelessCloudConnectorId' => 'WirelessCloudConnectorId',
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
        if (null !== $this->featureName) {
            $res['FeatureName'] = $this->featureName;
        }
        if (null !== $this->featureValue) {
            $res['FeatureValue'] = $this->featureValue;
        }
        if (null !== $this->wirelessCloudConnectorId) {
            $res['WirelessCloudConnectorId'] = $this->wirelessCloudConnectorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyWirelessCloudConnectorFeatureRequest
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
        if (isset($map['FeatureName'])) {
            $model->featureName = $map['FeatureName'];
        }
        if (isset($map['FeatureValue'])) {
            $model->featureValue = $map['FeatureValue'];
        }
        if (isset($map['WirelessCloudConnectorId'])) {
            $model->wirelessCloudConnectorId = $map['WirelessCloudConnectorId'];
        }

        return $model;
    }
}
