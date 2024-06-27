<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class UploadSampleApiRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ip
     *
     * @var string
     */
    public $dataType;

    /**
     * @description This parameter is required.
     *
     * @example ["123.124.125.126","123.124.125.127"]
     *
     * @var string
     */
    public $dataValue;

    /**
     * @description This parameter is required.
     *
     * @example block
     *
     * @var string
     */
    public $sampleType;

    /**
     * @description This parameter is required.
     *
     * @example account_abuse,coupon_abuse,account_takeover
     *
     * @var string
     */
    public $service;
    protected $_name = [
        'dataType'   => 'DataType',
        'dataValue'  => 'DataValue',
        'sampleType' => 'SampleType',
        'service'    => 'Service',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->dataValue) {
            $res['DataValue'] = $this->dataValue;
        }
        if (null !== $this->sampleType) {
            $res['SampleType'] = $this->sampleType;
        }
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadSampleApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['DataValue'])) {
            $model->dataValue = $map['DataValue'];
        }
        if (isset($map['SampleType'])) {
            $model->sampleType = $map['SampleType'];
        }
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }

        return $model;
    }
}
