<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class CreateModelServiceRequest extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $baseUrl;

    /**
     * @var string
     */
    public $gwClusterId;

    /**
     * @var string
     */
    public $inputCostPointsPerMillion;

    /**
     * @var string
     */
    public $modelCategory;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $outputCostPointsPerMillion;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestCostPoints;

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'baseUrl' => 'BaseUrl',
        'gwClusterId' => 'GwClusterId',
        'inputCostPointsPerMillion' => 'InputCostPointsPerMillion',
        'modelCategory' => 'ModelCategory',
        'name' => 'Name',
        'outputCostPointsPerMillion' => 'OutputCostPointsPerMillion',
        'protocol' => 'Protocol',
        'regionId' => 'RegionId',
        'requestCostPoints' => 'RequestCostPoints',
        'vendor' => 'Vendor',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->baseUrl) {
            $res['BaseUrl'] = $this->baseUrl;
        }

        if (null !== $this->gwClusterId) {
            $res['GwClusterId'] = $this->gwClusterId;
        }

        if (null !== $this->inputCostPointsPerMillion) {
            $res['InputCostPointsPerMillion'] = $this->inputCostPointsPerMillion;
        }

        if (null !== $this->modelCategory) {
            $res['ModelCategory'] = $this->modelCategory;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->outputCostPointsPerMillion) {
            $res['OutputCostPointsPerMillion'] = $this->outputCostPointsPerMillion;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestCostPoints) {
            $res['RequestCostPoints'] = $this->requestCostPoints;
        }

        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
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
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['BaseUrl'])) {
            $model->baseUrl = $map['BaseUrl'];
        }

        if (isset($map['GwClusterId'])) {
            $model->gwClusterId = $map['GwClusterId'];
        }

        if (isset($map['InputCostPointsPerMillion'])) {
            $model->inputCostPointsPerMillion = $map['InputCostPointsPerMillion'];
        }

        if (isset($map['ModelCategory'])) {
            $model->modelCategory = $map['ModelCategory'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OutputCostPointsPerMillion'])) {
            $model->outputCostPointsPerMillion = $map['OutputCostPointsPerMillion'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestCostPoints'])) {
            $model->requestCostPoints = $map['RequestCostPoints'];
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
