<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\Tea\Model;

class DescribeSDKStatisticLogRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $esnApp;

    /**
     * @var string
     */
    public $esnBiz;

    /**
     * @var string
     */
    public $esnGroup;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $ISP;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $detectIp;
    protected $_name = [
        'sourceIp'  => 'SourceIp',
        'lang'      => 'Lang',
        'startTime' => 'StartTime',
        'endTime'   => 'EndTime',
        'page'      => 'Page',
        'pageSize'  => 'PageSize',
        'esnApp'    => 'EsnApp',
        'esnBiz'    => 'EsnBiz',
        'esnGroup'  => 'EsnGroup',
        'source'    => 'Source',
        'country'   => 'Country',
        'province'  => 'Province',
        'city'      => 'City',
        'ISP'       => 'ISP',
        'token'     => 'Token',
        'result'    => 'Result',
        'osType'    => 'OsType',
        'detectIp'  => 'DetectIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->esnApp) {
            $res['EsnApp'] = $this->esnApp;
        }
        if (null !== $this->esnBiz) {
            $res['EsnBiz'] = $this->esnBiz;
        }
        if (null !== $this->esnGroup) {
            $res['EsnGroup'] = $this->esnGroup;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->detectIp) {
            $res['DetectIp'] = $this->detectIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSDKStatisticLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['EsnApp'])) {
            $model->esnApp = $map['EsnApp'];
        }
        if (isset($map['EsnBiz'])) {
            $model->esnBiz = $map['EsnBiz'];
        }
        if (isset($map['EsnGroup'])) {
            $model->esnGroup = $map['EsnGroup'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['DetectIp'])) {
            $model->detectIp = $map['DetectIp'];
        }

        return $model;
    }
}
