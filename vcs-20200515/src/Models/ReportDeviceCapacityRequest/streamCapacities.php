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
    public $resolution;

    /**
     * @var string
     */
    public $maxFrameRate;

    /**
     * @var string
     */
    public $maxStream;

    /**
     * @var string
     */
    public $bitrateRange;

    /**
     * @var string
     */
    public $govLengthRange;
    protected $_name = [
        'encodeFormat'   => 'EncodeFormat',
        'resolution'     => 'Resolution',
        'maxFrameRate'   => 'MaxFrameRate',
        'maxStream'      => 'MaxStream',
        'bitrateRange'   => 'BitrateRange',
        'govLengthRange' => 'GovLengthRange',
    ];

    public function validate()
    {
        Model::validateRequired('encodeFormat', $this->encodeFormat, true);
        Model::validateRequired('resolution', $this->resolution, true);
        Model::validateRequired('maxFrameRate', $this->maxFrameRate, true);
        Model::validateRequired('maxStream', $this->maxStream, true);
        Model::validateRequired('bitrateRange', $this->bitrateRange, true);
        Model::validateRequired('govLengthRange', $this->govLengthRange, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encodeFormat) {
            $res['EncodeFormat'] = $this->encodeFormat;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }
        if (null !== $this->maxFrameRate) {
            $res['MaxFrameRate'] = $this->maxFrameRate;
        }
        if (null !== $this->maxStream) {
            $res['MaxStream'] = $this->maxStream;
        }
        if (null !== $this->bitrateRange) {
            $res['BitrateRange'] = $this->bitrateRange;
        }
        if (null !== $this->govLengthRange) {
            $res['GovLengthRange'] = $this->govLengthRange;
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
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }
        if (isset($map['MaxFrameRate'])) {
            $model->maxFrameRate = $map['MaxFrameRate'];
        }
        if (isset($map['MaxStream'])) {
            $model->maxStream = $map['MaxStream'];
        }
        if (isset($map['BitrateRange'])) {
            $model->bitrateRange = $map['BitrateRange'];
        }
        if (isset($map['GovLengthRange'])) {
            $model->govLengthRange = $map['GovLengthRange'];
        }

        return $model;
    }
}
