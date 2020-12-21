<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ReportDeviceCapacityRequest;

use AlibabaCloud\Tea\Model;

class streamCapacities extends Model
{
    /**
     * @var string
     */
    public $encodeFormat;

    /**
     * @var string
     */
    public $govLengthRange;

    /**
     * @var string
     */
    public $maxFrameRate;

    /**
     * @var string
     */
    public $bitrateRange;

    /**
     * @var string
     */
    public $maxStream;

    /**
     * @var string
     */
    public $resolution;
    protected $_name = [
        'encodeFormat'   => 'EncodeFormat',
        'govLengthRange' => 'GovLengthRange',
        'maxFrameRate'   => 'MaxFrameRate',
        'bitrateRange'   => 'BitrateRange',
        'maxStream'      => 'MaxStream',
        'resolution'     => 'Resolution',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encodeFormat) {
            $res['EncodeFormat'] = $this->encodeFormat;
        }
        if (null !== $this->govLengthRange) {
            $res['GovLengthRange'] = $this->govLengthRange;
        }
        if (null !== $this->maxFrameRate) {
            $res['MaxFrameRate'] = $this->maxFrameRate;
        }
        if (null !== $this->bitrateRange) {
            $res['BitrateRange'] = $this->bitrateRange;
        }
        if (null !== $this->maxStream) {
            $res['MaxStream'] = $this->maxStream;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamCapacities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncodeFormat'])) {
            $model->encodeFormat = $map['EncodeFormat'];
        }
        if (isset($map['GovLengthRange'])) {
            $model->govLengthRange = $map['GovLengthRange'];
        }
        if (isset($map['MaxFrameRate'])) {
            $model->maxFrameRate = $map['MaxFrameRate'];
        }
        if (isset($map['BitrateRange'])) {
            $model->bitrateRange = $map['BitrateRange'];
        }
        if (isset($map['MaxStream'])) {
            $model->maxStream = $map['MaxStream'];
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }

        return $model;
    }
}
