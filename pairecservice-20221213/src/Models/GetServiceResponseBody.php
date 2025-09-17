<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetServiceResponseBody\latestProdReleaseOrder;

class GetServiceResponseBody extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $engineConfigId;

    /**
     * @var string
     */
    public $gmtReleasedTime;

    /**
     * @var string
     */
    public $imageAuth;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var latestProdReleaseOrder
     */
    public $latestProdReleaseOrder;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $serviceConfig;

    /**
     * @var string
     */
    public $serviceResourceUri;
    protected $_name = [
        'description' => 'Description',
        'engineConfigId' => 'EngineConfigId',
        'gmtReleasedTime' => 'GmtReleasedTime',
        'imageAuth' => 'ImageAuth',
        'imageName' => 'ImageName',
        'latestProdReleaseOrder' => 'LatestProdReleaseOrder',
        'name' => 'Name',
        'region' => 'Region',
        'requestId' => 'RequestId',
        'serviceConfig' => 'ServiceConfig',
        'serviceResourceUri' => 'ServiceResourceUri',
    ];

    public function validate()
    {
        if (null !== $this->latestProdReleaseOrder) {
            $this->latestProdReleaseOrder->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->engineConfigId) {
            $res['EngineConfigId'] = $this->engineConfigId;
        }

        if (null !== $this->gmtReleasedTime) {
            $res['GmtReleasedTime'] = $this->gmtReleasedTime;
        }

        if (null !== $this->imageAuth) {
            $res['ImageAuth'] = $this->imageAuth;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->latestProdReleaseOrder) {
            $res['LatestProdReleaseOrder'] = null !== $this->latestProdReleaseOrder ? $this->latestProdReleaseOrder->toArray($noStream) : $this->latestProdReleaseOrder;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serviceConfig) {
            $res['ServiceConfig'] = $this->serviceConfig;
        }

        if (null !== $this->serviceResourceUri) {
            $res['ServiceResourceUri'] = $this->serviceResourceUri;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EngineConfigId'])) {
            $model->engineConfigId = $map['EngineConfigId'];
        }

        if (isset($map['GmtReleasedTime'])) {
            $model->gmtReleasedTime = $map['GmtReleasedTime'];
        }

        if (isset($map['ImageAuth'])) {
            $model->imageAuth = $map['ImageAuth'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['LatestProdReleaseOrder'])) {
            $model->latestProdReleaseOrder = latestProdReleaseOrder::fromMap($map['LatestProdReleaseOrder']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ServiceConfig'])) {
            $model->serviceConfig = $map['ServiceConfig'];
        }

        if (isset($map['ServiceResourceUri'])) {
            $model->serviceResourceUri = $map['ServiceResourceUri'];
        }

        return $model;
    }
}
