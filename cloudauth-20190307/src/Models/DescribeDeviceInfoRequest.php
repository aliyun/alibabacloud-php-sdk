<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class DescribeDeviceInfoRequest extends Model
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
    public $totalCount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $userDeviceId;

    /**
     * @var string
     */
    public $expiredStartDay;

    /**
     * @var string
     */
    public $expiredEndDay;
    protected $_name = [
        'sourceIp'        => 'SourceIp',
        'lang'            => 'Lang',
        'totalCount'      => 'TotalCount',
        'pageSize'        => 'PageSize',
        'currentPage'     => 'CurrentPage',
        'deviceId'        => 'DeviceId',
        'bizType'         => 'BizType',
        'userDeviceId'    => 'UserDeviceId',
        'expiredStartDay' => 'ExpiredStartDay',
        'expiredEndDay'   => 'ExpiredEndDay',
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->userDeviceId) {
            $res['UserDeviceId'] = $this->userDeviceId;
        }
        if (null !== $this->expiredStartDay) {
            $res['ExpiredStartDay'] = $this->expiredStartDay;
        }
        if (null !== $this->expiredEndDay) {
            $res['ExpiredEndDay'] = $this->expiredEndDay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDeviceInfoRequest
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['UserDeviceId'])) {
            $model->userDeviceId = $map['UserDeviceId'];
        }
        if (isset($map['ExpiredStartDay'])) {
            $model->expiredStartDay = $map['ExpiredStartDay'];
        }
        if (isset($map['ExpiredEndDay'])) {
            $model->expiredEndDay = $map['ExpiredEndDay'];
        }

        return $model;
    }
}
