<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudRecordRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudRecordRequest\singleStreamingRecord\specifiedStreams;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudRecordRequest\singleStreamingRecord\transcodingParameters;

class singleStreamingRecord extends Model
{
    /**
     * @var bool
     */
    public $avMerge;

    /**
     * @var specifiedStreams[]
     */
    public $specifiedStreams;

    /**
     * @var transcodingParameters
     */
    public $transcodingParameters;
    protected $_name = [
        'avMerge' => 'AvMerge',
        'specifiedStreams' => 'SpecifiedStreams',
        'transcodingParameters' => 'TranscodingParameters',
    ];

    public function validate()
    {
        if (\is_array($this->specifiedStreams)) {
            Model::validateArray($this->specifiedStreams);
        }
        if (null !== $this->transcodingParameters) {
            $this->transcodingParameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avMerge) {
            $res['AvMerge'] = $this->avMerge;
        }

        if (null !== $this->specifiedStreams) {
            if (\is_array($this->specifiedStreams)) {
                $res['SpecifiedStreams'] = [];
                $n1 = 0;
                foreach ($this->specifiedStreams as $item1) {
                    $res['SpecifiedStreams'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->transcodingParameters) {
            $res['TranscodingParameters'] = null !== $this->transcodingParameters ? $this->transcodingParameters->toArray($noStream) : $this->transcodingParameters;
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
        if (isset($map['AvMerge'])) {
            $model->avMerge = $map['AvMerge'];
        }

        if (isset($map['SpecifiedStreams'])) {
            if (!empty($map['SpecifiedStreams'])) {
                $model->specifiedStreams = [];
                $n1 = 0;
                foreach ($map['SpecifiedStreams'] as $item1) {
                    $model->specifiedStreams[$n1] = specifiedStreams::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TranscodingParameters'])) {
            $model->transcodingParameters = transcodingParameters::fromMap($map['TranscodingParameters']);
        }

        return $model;
    }
}
