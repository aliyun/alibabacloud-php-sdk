<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeNetworkTrafficTopRatioRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $assetIP;

    /**
     * @var string
     */
    public $assetRegion;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $dstIP;

    /**
     * @var string
     */
    public $dstPort;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $ipProperty;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $ruleResult;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var string
     */
    public $sourceCode;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $srcIP;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'appName' => 'AppName',
        'assetIP' => 'AssetIP',
        'assetRegion' => 'AssetRegion',
        'dataType' => 'DataType',
        'direction' => 'Direction',
        'dstIP' => 'DstIP',
        'dstPort' => 'DstPort',
        'endTime' => 'EndTime',
        'ipProperty' => 'IpProperty',
        'isp' => 'Isp',
        'lang' => 'Lang',
        'location' => 'Location',
        'ruleResult' => 'RuleResult',
        'sort' => 'Sort',
        'sourceCode' => 'SourceCode',
        'sourceIp' => 'SourceIp',
        'srcIP' => 'SrcIP',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->assetIP) {
            $res['AssetIP'] = $this->assetIP;
        }

        if (null !== $this->assetRegion) {
            $res['AssetRegion'] = $this->assetRegion;
        }

        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->dstIP) {
            $res['DstIP'] = $this->dstIP;
        }

        if (null !== $this->dstPort) {
            $res['DstPort'] = $this->dstPort;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->ipProperty) {
            $res['IpProperty'] = $this->ipProperty;
        }

        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        if (null !== $this->ruleResult) {
            $res['RuleResult'] = $this->ruleResult;
        }

        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        if (null !== $this->sourceCode) {
            $res['SourceCode'] = $this->sourceCode;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        if (null !== $this->srcIP) {
            $res['SrcIP'] = $this->srcIP;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AssetIP'])) {
            $model->assetIP = $map['AssetIP'];
        }

        if (isset($map['AssetRegion'])) {
            $model->assetRegion = $map['AssetRegion'];
        }

        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['DstIP'])) {
            $model->dstIP = $map['DstIP'];
        }

        if (isset($map['DstPort'])) {
            $model->dstPort = $map['DstPort'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['IpProperty'])) {
            $model->ipProperty = $map['IpProperty'];
        }

        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        if (isset($map['RuleResult'])) {
            $model->ruleResult = $map['RuleResult'];
        }

        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        if (isset($map['SourceCode'])) {
            $model->sourceCode = $map['SourceCode'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['SrcIP'])) {
            $model->srcIP = $map['SrcIP'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
