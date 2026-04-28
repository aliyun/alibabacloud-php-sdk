<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeModelServicesResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
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
    public $gmtCreated;

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
    public $modelServiceId;

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
    public $requestCostPoints;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'baseUrl' => 'BaseUrl',
        'gmtCreated' => 'GmtCreated',
        'inputCostPointsPerMillion' => 'InputCostPointsPerMillion',
        'modelCategory' => 'ModelCategory',
        'modelServiceId' => 'ModelServiceId',
        'name' => 'Name',
        'outputCostPointsPerMillion' => 'OutputCostPointsPerMillion',
        'protocol' => 'Protocol',
        'requestCostPoints' => 'RequestCostPoints',
        'status' => 'Status',
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

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->inputCostPointsPerMillion) {
            $res['InputCostPointsPerMillion'] = $this->inputCostPointsPerMillion;
        }

        if (null !== $this->modelCategory) {
            $res['ModelCategory'] = $this->modelCategory;
        }

        if (null !== $this->modelServiceId) {
            $res['ModelServiceId'] = $this->modelServiceId;
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

        if (null !== $this->requestCostPoints) {
            $res['RequestCostPoints'] = $this->requestCostPoints;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['InputCostPointsPerMillion'])) {
            $model->inputCostPointsPerMillion = $map['InputCostPointsPerMillion'];
        }

        if (isset($map['ModelCategory'])) {
            $model->modelCategory = $map['ModelCategory'];
        }

        if (isset($map['ModelServiceId'])) {
            $model->modelServiceId = $map['ModelServiceId'];
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

        if (isset($map['RequestCostPoints'])) {
            $model->requestCostPoints = $map['RequestCostPoints'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
