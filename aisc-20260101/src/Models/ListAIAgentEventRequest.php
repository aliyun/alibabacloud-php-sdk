<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AISC\V20260101\Models;

use AlibabaCloud\Dara\Model;

class ListAIAgentEventRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $assetName;

    /**
     * @var string
     */
    public $assetType;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $infraInstanceId;

    /**
     * @var string
     */
    public $infraName;

    /**
     * @var string
     */
    public $infraRegionId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $riskName;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $statusList;

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'assetName' => 'AssetName',
        'assetType' => 'AssetType',
        'currentPage' => 'CurrentPage',
        'infraInstanceId' => 'InfraInstanceId',
        'infraName' => 'InfraName',
        'infraRegionId' => 'InfraRegionId',
        'lang' => 'Lang',
        'pageSize' => 'PageSize',
        'riskLevel' => 'RiskLevel',
        'riskName' => 'RiskName',
        'source' => 'Source',
        'status' => 'Status',
        'statusList' => 'StatusList',
        'vendor' => 'Vendor',
    ];

    public function validate()
    {
        if (\is_array($this->statusList)) {
            Model::validateArray($this->statusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->assetName) {
            $res['AssetName'] = $this->assetName;
        }

        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->infraInstanceId) {
            $res['InfraInstanceId'] = $this->infraInstanceId;
        }

        if (null !== $this->infraName) {
            $res['InfraName'] = $this->infraName;
        }

        if (null !== $this->infraRegionId) {
            $res['InfraRegionId'] = $this->infraRegionId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->riskName) {
            $res['RiskName'] = $this->riskName;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusList) {
            if (\is_array($this->statusList)) {
                $res['StatusList'] = [];
                $n1 = 0;
                foreach ($this->statusList as $item1) {
                    $res['StatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AssetName'])) {
            $model->assetName = $map['AssetName'];
        }

        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['InfraInstanceId'])) {
            $model->infraInstanceId = $map['InfraInstanceId'];
        }

        if (isset($map['InfraName'])) {
            $model->infraName = $map['InfraName'];
        }

        if (isset($map['InfraRegionId'])) {
            $model->infraRegionId = $map['InfraRegionId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['RiskName'])) {
            $model->riskName = $map['RiskName'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = [];
                $n1 = 0;
                foreach ($map['StatusList'] as $item1) {
                    $model->statusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
