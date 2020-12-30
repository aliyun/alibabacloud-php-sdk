<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeSDKStatisticLogResponseBody;

use AlibabaCloud\Tea\Model;

class statistic extends Model
{
    /**
     * @var string
     */
    public $serverTime;

    /**
     * @var string
     */
    public $callResult;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $pingResult;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $countryId;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $connectResult;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $provinceId;

    /**
     * @var string
     */
    public $detectIp;

    /**
     * @var string
     */
    public $traceResult;

    /**
     * @var string
     */
    public $esnAppId;

    /**
     * @var string
     */
    public $MType;

    /**
     * @var string
     */
    public $ispId;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var string
     */
    public $cityId;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $verdictCode;

    /**
     * @var string
     */
    public $sdkVersion;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $esnGroupId;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $esnBizId;
    protected $_name = [
        'serverTime'    => 'ServerTime',
        'callResult'    => 'CallResult',
        'token'         => 'Token',
        'pingResult'    => 'PingResult',
        'userId'        => 'UserId',
        'countryId'     => 'CountryId',
        'city'          => 'City',
        'connectResult' => 'ConnectResult',
        'sourceIp'      => 'SourceIp',
        'provinceId'    => 'ProvinceId',
        'detectIp'      => 'DetectIp',
        'traceResult'   => 'TraceResult',
        'esnAppId'      => 'EsnAppId',
        'MType'         => 'MType',
        'ispId'         => 'IspId',
        'isp'           => 'Isp',
        'cityId'        => 'CityId',
        'osType'        => 'OsType',
        'verdictCode'   => 'VerdictCode',
        'sdkVersion'    => 'SdkVersion',
        'country'       => 'Country',
        'esnGroupId'    => 'EsnGroupId',
        'province'      => 'Province',
        'esnBizId'      => 'EsnBizId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serverTime) {
            $res['ServerTime'] = $this->serverTime;
        }
        if (null !== $this->callResult) {
            $res['CallResult'] = $this->callResult;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->pingResult) {
            $res['PingResult'] = $this->pingResult;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->countryId) {
            $res['CountryId'] = $this->countryId;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->connectResult) {
            $res['ConnectResult'] = $this->connectResult;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->provinceId) {
            $res['ProvinceId'] = $this->provinceId;
        }
        if (null !== $this->detectIp) {
            $res['DetectIp'] = $this->detectIp;
        }
        if (null !== $this->traceResult) {
            $res['TraceResult'] = $this->traceResult;
        }
        if (null !== $this->esnAppId) {
            $res['EsnAppId'] = $this->esnAppId;
        }
        if (null !== $this->MType) {
            $res['MType'] = $this->MType;
        }
        if (null !== $this->ispId) {
            $res['IspId'] = $this->ispId;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->cityId) {
            $res['CityId'] = $this->cityId;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->verdictCode) {
            $res['VerdictCode'] = $this->verdictCode;
        }
        if (null !== $this->sdkVersion) {
            $res['SdkVersion'] = $this->sdkVersion;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->esnGroupId) {
            $res['EsnGroupId'] = $this->esnGroupId;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->esnBizId) {
            $res['EsnBizId'] = $this->esnBizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServerTime'])) {
            $model->serverTime = $map['ServerTime'];
        }
        if (isset($map['CallResult'])) {
            $model->callResult = $map['CallResult'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['PingResult'])) {
            $model->pingResult = $map['PingResult'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['CountryId'])) {
            $model->countryId = $map['CountryId'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['ConnectResult'])) {
            $model->connectResult = $map['ConnectResult'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['ProvinceId'])) {
            $model->provinceId = $map['ProvinceId'];
        }
        if (isset($map['DetectIp'])) {
            $model->detectIp = $map['DetectIp'];
        }
        if (isset($map['TraceResult'])) {
            $model->traceResult = $map['TraceResult'];
        }
        if (isset($map['EsnAppId'])) {
            $model->esnAppId = $map['EsnAppId'];
        }
        if (isset($map['MType'])) {
            $model->MType = $map['MType'];
        }
        if (isset($map['IspId'])) {
            $model->ispId = $map['IspId'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['CityId'])) {
            $model->cityId = $map['CityId'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['VerdictCode'])) {
            $model->verdictCode = $map['VerdictCode'];
        }
        if (isset($map['SdkVersion'])) {
            $model->sdkVersion = $map['SdkVersion'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['EsnGroupId'])) {
            $model->esnGroupId = $map['EsnGroupId'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['EsnBizId'])) {
            $model->esnBizId = $map['EsnBizId'];
        }

        return $model;
    }
}
