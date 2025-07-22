<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudRecordRequest;

use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudRecordRequest\singleStreamingRecord\specifiedStreams;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudRecordRequest\singleStreamingRecord\transcodingParameters;
use AlibabaCloud\Tea\Model;

class singleStreamingRecord extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var specifiedStreams[]
     */
    public $specifiedStreams;

    /**
     * @var transcodingParameters
     */
    public $transcodingParameters;
    protected $_name = [
        'specifiedStreams' => 'SpecifiedStreams',
        'transcodingParameters' => 'TranscodingParameters',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->specifiedStreams) {
            $res['SpecifiedStreams'] = [];
            if (null !== $this->specifiedStreams && \is_array($this->specifiedStreams)) {
                $n = 0;
                foreach ($this->specifiedStreams as $item) {
                    $res['SpecifiedStreams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->transcodingParameters) {
            $res['TranscodingParameters'] = null !== $this->transcodingParameters ? $this->transcodingParameters->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return singleStreamingRecord
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpecifiedStreams'])) {
            if (!empty($map['SpecifiedStreams'])) {
                $model->specifiedStreams = [];
                $n = 0;
                foreach ($map['SpecifiedStreams'] as $item) {
                    $model->specifiedStreams[$n++] = null !== $item ? specifiedStreams::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TranscodingParameters'])) {
            $model->transcodingParameters = transcodingParameters::fromMap($map['TranscodingParameters']);
        }

        return $model;
    }
}
