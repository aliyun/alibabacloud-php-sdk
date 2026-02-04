<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionLOAResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionLOAResponseBody\physicalConnectionLOAType\PMInfo;

class physicalConnectionLOAType extends Model
{
    /**
     * @var string
     */
    public $companyLocalizedName;

    /**
     * @var string
     */
    public $companyName;

    /**
     * @var string
     */
    public $constructionTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $lineCode;

    /**
     * @var string
     */
    public $lineLabel;

    /**
     * @var string
     */
    public $lineSPContactInfo;

    /**
     * @var string
     */
    public $lineServiceProvider;

    /**
     * @var string
     */
    public $lineType;

    /**
     * @var string
     */
    public $loaUrl;

    /**
     * @var PMInfo
     */
    public $PMInfo;

    /**
     * @var string
     */
    public $SI;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'companyLocalizedName' => 'CompanyLocalizedName',
        'companyName' => 'CompanyName',
        'constructionTime' => 'ConstructionTime',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'lineCode' => 'LineCode',
        'lineLabel' => 'LineLabel',
        'lineSPContactInfo' => 'LineSPContactInfo',
        'lineServiceProvider' => 'LineServiceProvider',
        'lineType' => 'LineType',
        'loaUrl' => 'LoaUrl',
        'PMInfo' => 'PMInfo',
        'SI' => 'SI',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->PMInfo) {
            $this->PMInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->companyLocalizedName) {
            $res['CompanyLocalizedName'] = $this->companyLocalizedName;
        }

        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }

        if (null !== $this->constructionTime) {
            $res['ConstructionTime'] = $this->constructionTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lineCode) {
            $res['LineCode'] = $this->lineCode;
        }

        if (null !== $this->lineLabel) {
            $res['LineLabel'] = $this->lineLabel;
        }

        if (null !== $this->lineSPContactInfo) {
            $res['LineSPContactInfo'] = $this->lineSPContactInfo;
        }

        if (null !== $this->lineServiceProvider) {
            $res['LineServiceProvider'] = $this->lineServiceProvider;
        }

        if (null !== $this->lineType) {
            $res['LineType'] = $this->lineType;
        }

        if (null !== $this->loaUrl) {
            $res['LoaUrl'] = $this->loaUrl;
        }

        if (null !== $this->PMInfo) {
            $res['PMInfo'] = null !== $this->PMInfo ? $this->PMInfo->toArray($noStream) : $this->PMInfo;
        }

        if (null !== $this->SI) {
            $res['SI'] = $this->SI;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CompanyLocalizedName'])) {
            $model->companyLocalizedName = $map['CompanyLocalizedName'];
        }

        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }

        if (isset($map['ConstructionTime'])) {
            $model->constructionTime = $map['ConstructionTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LineCode'])) {
            $model->lineCode = $map['LineCode'];
        }

        if (isset($map['LineLabel'])) {
            $model->lineLabel = $map['LineLabel'];
        }

        if (isset($map['LineSPContactInfo'])) {
            $model->lineSPContactInfo = $map['LineSPContactInfo'];
        }

        if (isset($map['LineServiceProvider'])) {
            $model->lineServiceProvider = $map['LineServiceProvider'];
        }

        if (isset($map['LineType'])) {
            $model->lineType = $map['LineType'];
        }

        if (isset($map['LoaUrl'])) {
            $model->loaUrl = $map['LoaUrl'];
        }

        if (isset($map['PMInfo'])) {
            $model->PMInfo = PMInfo::fromMap($map['PMInfo']);
        }

        if (isset($map['SI'])) {
            $model->SI = $map['SI'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
