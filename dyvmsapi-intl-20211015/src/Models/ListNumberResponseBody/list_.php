<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListNumberResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $applyId;

    /**
     * @var string
     */
    public $countryId;

    /**
     * @var string
     */
    public $disableTs;

    /**
     * @var int
     */
    public $inboundConcurrency;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $numberName;

    /**
     * @var int
     */
    public $outboundConcurrency;

    /**
     * @var int
     */
    public $phoneType;

    /**
     * @var string
     */
    public $qualificationId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $supplierId;

    /**
     * @var int
     */
    public $support;

    /**
     * @var string
     */
    public $updateTs;
    protected $_name = [
        'applyId'             => 'ApplyId',
        'countryId'           => 'CountryId',
        'disableTs'           => 'DisableTs',
        'inboundConcurrency'  => 'InboundConcurrency',
        'number'              => 'Number',
        'numberName'          => 'NumberName',
        'outboundConcurrency' => 'OutboundConcurrency',
        'phoneType'           => 'PhoneType',
        'qualificationId'     => 'QualificationId',
        'resourceId'          => 'ResourceId',
        'status'              => 'Status',
        'supplierId'          => 'SupplierId',
        'support'             => 'Support',
        'updateTs'            => 'UpdateTs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['ApplyId'] = $this->applyId;
        }
        if (null !== $this->countryId) {
            $res['CountryId'] = $this->countryId;
        }
        if (null !== $this->disableTs) {
            $res['DisableTs'] = $this->disableTs;
        }
        if (null !== $this->inboundConcurrency) {
            $res['InboundConcurrency'] = $this->inboundConcurrency;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->numberName) {
            $res['NumberName'] = $this->numberName;
        }
        if (null !== $this->outboundConcurrency) {
            $res['OutboundConcurrency'] = $this->outboundConcurrency;
        }
        if (null !== $this->phoneType) {
            $res['PhoneType'] = $this->phoneType;
        }
        if (null !== $this->qualificationId) {
            $res['QualificationId'] = $this->qualificationId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supplierId) {
            $res['SupplierId'] = $this->supplierId;
        }
        if (null !== $this->support) {
            $res['Support'] = $this->support;
        }
        if (null !== $this->updateTs) {
            $res['UpdateTs'] = $this->updateTs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyId'])) {
            $model->applyId = $map['ApplyId'];
        }
        if (isset($map['CountryId'])) {
            $model->countryId = $map['CountryId'];
        }
        if (isset($map['DisableTs'])) {
            $model->disableTs = $map['DisableTs'];
        }
        if (isset($map['InboundConcurrency'])) {
            $model->inboundConcurrency = $map['InboundConcurrency'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['NumberName'])) {
            $model->numberName = $map['NumberName'];
        }
        if (isset($map['OutboundConcurrency'])) {
            $model->outboundConcurrency = $map['OutboundConcurrency'];
        }
        if (isset($map['PhoneType'])) {
            $model->phoneType = $map['PhoneType'];
        }
        if (isset($map['QualificationId'])) {
            $model->qualificationId = $map['QualificationId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupplierId'])) {
            $model->supplierId = $map['SupplierId'];
        }
        if (isset($map['Support'])) {
            $model->support = $map['Support'];
        }
        if (isset($map['UpdateTs'])) {
            $model->updateTs = $map['UpdateTs'];
        }

        return $model;
    }
}
