<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safconsole\V20210112\Models;

use AlibabaCloud\Dara\Model;

class UploadSampleApiRequest extends Model
{
    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $dataValue;

    /**
     * @var string
     */
    public $sampleType;

    /**
     * @var string
     */
    public $service;
    protected $_name = [
        'dataType' => 'DataType',
        'dataValue' => 'DataValue',
        'sampleType' => 'SampleType',
        'service' => 'Service',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
