<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class CreateSampleApiRequest extends Model
{
    /**
     * @example ip/accountID
     *
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $dataValue;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description regionId
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $sampleBatchType;

    /**
     * @var string
     */
    public $serviceList;
    protected $_name = [
        'dataType'        => 'DataType',
        'dataValue'       => 'DataValue',
        'lang'            => 'Lang',
        'regId'           => 'RegId',
        'sampleBatchType' => 'SampleBatchType',
        'serviceList'     => 'ServiceList',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->regId) {
            $res['RegId'] = $this->regId;
        }
        if (null !== $this->sampleBatchType) {
            $res['SampleBatchType'] = $this->sampleBatchType;
        }
        if (null !== $this->serviceList) {
            $res['ServiceList'] = $this->serviceList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSampleApiRequest
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RegId'])) {
            $model->regId = $map['RegId'];
        }
        if (isset($map['SampleBatchType'])) {
            $model->sampleBatchType = $map['SampleBatchType'];
        }
        if (isset($map['ServiceList'])) {
            $model->serviceList = $map['ServiceList'];
        }

        return $model;
    }
}
