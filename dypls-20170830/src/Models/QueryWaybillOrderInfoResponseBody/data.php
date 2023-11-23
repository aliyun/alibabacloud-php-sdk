<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models\QueryWaybillOrderInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $aliyunprice;

    /**
     * @var string
     */
    public $appointGotEndTime;

    /**
     * @var string
     */
    public $appointGotStartTime;

    /**
     * @var int
     */
    public $bizType;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $cpCode;

    /**
     * @var string
     */
    public $gotCode;

    /**
     * @var string
     */
    public $lastLogisticDetail;

    /**
     * @var string
     */
    public $logisticsGmtModified;

    /**
     * @var string
     */
    public $logisticsStatus;

    /**
     * @var string
     */
    public $logisticsStatusDesc;

    /**
     * @var string
     */
    public $mailNo;

    /**
     * @var string
     */
    public $outerOrderCode;
    protected $_name = [
        'aliyunprice'          => 'Aliyunprice',
        'appointGotEndTime'    => 'AppointGotEndTime',
        'appointGotStartTime'  => 'AppointGotStartTime',
        'bizType'              => 'BizType',
        'city'                 => 'City',
        'cpCode'               => 'CpCode',
        'gotCode'              => 'GotCode',
        'lastLogisticDetail'   => 'LastLogisticDetail',
        'logisticsGmtModified' => 'LogisticsGmtModified',
        'logisticsStatus'      => 'LogisticsStatus',
        'logisticsStatusDesc'  => 'LogisticsStatusDesc',
        'mailNo'               => 'MailNo',
        'outerOrderCode'       => 'OuterOrderCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunprice) {
            $res['Aliyunprice'] = $this->aliyunprice;
        }
        if (null !== $this->appointGotEndTime) {
            $res['AppointGotEndTime'] = $this->appointGotEndTime;
        }
        if (null !== $this->appointGotStartTime) {
            $res['AppointGotStartTime'] = $this->appointGotStartTime;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->cpCode) {
            $res['CpCode'] = $this->cpCode;
        }
        if (null !== $this->gotCode) {
            $res['GotCode'] = $this->gotCode;
        }
        if (null !== $this->lastLogisticDetail) {
            $res['LastLogisticDetail'] = $this->lastLogisticDetail;
        }
        if (null !== $this->logisticsGmtModified) {
            $res['LogisticsGmtModified'] = $this->logisticsGmtModified;
        }
        if (null !== $this->logisticsStatus) {
            $res['LogisticsStatus'] = $this->logisticsStatus;
        }
        if (null !== $this->logisticsStatusDesc) {
            $res['LogisticsStatusDesc'] = $this->logisticsStatusDesc;
        }
        if (null !== $this->mailNo) {
            $res['MailNo'] = $this->mailNo;
        }
        if (null !== $this->outerOrderCode) {
            $res['OuterOrderCode'] = $this->outerOrderCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aliyunprice'])) {
            $model->aliyunprice = $map['Aliyunprice'];
        }
        if (isset($map['AppointGotEndTime'])) {
            $model->appointGotEndTime = $map['AppointGotEndTime'];
        }
        if (isset($map['AppointGotStartTime'])) {
            $model->appointGotStartTime = $map['AppointGotStartTime'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['CpCode'])) {
            $model->cpCode = $map['CpCode'];
        }
        if (isset($map['GotCode'])) {
            $model->gotCode = $map['GotCode'];
        }
        if (isset($map['LastLogisticDetail'])) {
            $model->lastLogisticDetail = $map['LastLogisticDetail'];
        }
        if (isset($map['LogisticsGmtModified'])) {
            $model->logisticsGmtModified = $map['LogisticsGmtModified'];
        }
        if (isset($map['LogisticsStatus'])) {
            $model->logisticsStatus = $map['LogisticsStatus'];
        }
        if (isset($map['LogisticsStatusDesc'])) {
            $model->logisticsStatusDesc = $map['LogisticsStatusDesc'];
        }
        if (isset($map['MailNo'])) {
            $model->mailNo = $map['MailNo'];
        }
        if (isset($map['OuterOrderCode'])) {
            $model->outerOrderCode = $map['OuterOrderCode'];
        }

        return $model;
    }
}
