<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInternetOpenDetailRequest\sortList;

class DescribeInternetOpenDetailRequest extends Model
{
    /**
     * @var string
     */
    public $assetsInstanceId;

    /**
     * @var string
     */
    public $assetsInstanceName;

    /**
     * @var string
     */
    public $assetsType;

    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $publicIp;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $serviceNameFuzzy;

    /**
     * @var sortList[]
     */
    public $sortList;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $suggestLevel;
    protected $_name = [
        'assetsInstanceId' => 'AssetsInstanceId',
        'assetsInstanceName' => 'AssetsInstanceName',
        'assetsType' => 'AssetsType',
        'currentPage' => 'CurrentPage',
        'endTime' => 'EndTime',
        'lang' => 'Lang',
        'pageSize' => 'PageSize',
        'port' => 'Port',
        'publicIp' => 'PublicIp',
        'regionNo' => 'RegionNo',
        'riskLevel' => 'RiskLevel',
        'serviceName' => 'ServiceName',
        'serviceNameFuzzy' => 'ServiceNameFuzzy',
        'sortList' => 'SortList',
        'sourceIp' => 'SourceIp',
        'startTime' => 'StartTime',
        'suggestLevel' => 'SuggestLevel',
    ];

    public function validate()
    {
        if (\is_array($this->sortList)) {
            Model::validateArray($this->sortList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetsInstanceId) {
            $res['AssetsInstanceId'] = $this->assetsInstanceId;
        }

        if (null !== $this->assetsInstanceName) {
            $res['AssetsInstanceName'] = $this->assetsInstanceName;
        }

        if (null !== $this->assetsType) {
            $res['AssetsType'] = $this->assetsType;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->publicIp) {
            $res['PublicIp'] = $this->publicIp;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        if (null !== $this->serviceNameFuzzy) {
            $res['ServiceNameFuzzy'] = $this->serviceNameFuzzy;
        }

        if (null !== $this->sortList) {
            if (\is_array($this->sortList)) {
                $res['SortList'] = [];
                $n1 = 0;
                foreach ($this->sortList as $item1) {
                    $res['SortList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->suggestLevel) {
            $res['SuggestLevel'] = $this->suggestLevel;
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
        if (isset($map['AssetsInstanceId'])) {
            $model->assetsInstanceId = $map['AssetsInstanceId'];
        }

        if (isset($map['AssetsInstanceName'])) {
            $model->assetsInstanceName = $map['AssetsInstanceName'];
        }

        if (isset($map['AssetsType'])) {
            $model->assetsType = $map['AssetsType'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['PublicIp'])) {
            $model->publicIp = $map['PublicIp'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        if (isset($map['ServiceNameFuzzy'])) {
            $model->serviceNameFuzzy = $map['ServiceNameFuzzy'];
        }

        if (isset($map['SortList'])) {
            if (!empty($map['SortList'])) {
                $model->sortList = [];
                $n1 = 0;
                foreach ($map['SortList'] as $item1) {
                    $model->sortList[$n1] = sortList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['SuggestLevel'])) {
            $model->suggestLevel = $map['SuggestLevel'];
        }

        return $model;
    }
}
