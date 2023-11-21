<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeInternetOpenIpRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * @example i-uf6faknmuby7ezht****
     *
     * @var string
     */
    public $assetsInstanceId;

    /**
     * @description The instance name.
     *
     * @example launch-advisor-2023****
     *
     * @var string
     */
    public $assetsInstanceName;

    /**
     * @description The asset type of the instance.
     *
     * @example EcsEIP
     *
     * @var string
     */
    public $assetsType;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var string
     */
    public $currentPage;

    /**
     * @description The end of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1663640336
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The language of the content within the response. Valid values:
     *
     *   **zh**: Chinese (default)
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The port number.
     *
     * @example 80
     *
     * @var string
     */
    public $port;

    /**
     * @description The public IP address of the instance.
     *
     * @example 203.0.113.1
     *
     * @var string
     */
    public $publicIp;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description The risk level. If you leave this parameter empty, all risk levels are queried. Valid values:
     *
     *   **3**: high risk
     *   **2**: medium risk
     *   **1**: low risk
     *   **0**: no risk
     *
     * @example 2
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The application.
     *
     * @example SSH
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1681957629
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'assetsInstanceId'   => 'AssetsInstanceId',
        'assetsInstanceName' => 'AssetsInstanceName',
        'assetsType'         => 'AssetsType',
        'currentPage'        => 'CurrentPage',
        'endTime'            => 'EndTime',
        'lang'               => 'Lang',
        'pageSize'           => 'PageSize',
        'port'               => 'Port',
        'publicIp'           => 'PublicIp',
        'regionNo'           => 'RegionNo',
        'riskLevel'          => 'RiskLevel',
        'serviceName'        => 'ServiceName',
        'startTime'          => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInternetOpenIpRequest
     */
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
