<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safconsole\V20210112\Models;

use AlibabaCloud\Tea\Model;

class RevokeFeedbackRequest extends Model
{
    /**
     * @var string
     */
    public $sampleType;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'sampleType' => 'SampleType',
        'value'      => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sampleType) {
            $res['SampleType'] = $this->sampleType;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RevokeFeedbackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SampleType'])) {
            $model->sampleType = $map['SampleType'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
